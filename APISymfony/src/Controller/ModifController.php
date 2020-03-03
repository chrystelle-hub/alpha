<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entreprise;
use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Candidature;
use App\Entity\Formation;
use App\Form\AjoutEntrepriseType;
use App\Form\AjoutContactType;
use App\Form\AjoutCandidatureType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PropertyAccess\PropertyAccess;



class ModifController extends AbstractController
{
      public function __construct()
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();
    }
    /**
     * @Route("/modif/entreprise", name="modifEntreprise")
     */

    public function entreprise(Request $request)
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();
        $entrepriseUpdate=new Entreprise();
        $response = new Response();
        //récupérer objet entreprise en bdd selon l'id
        $entrepriseUpdate=$this->getDoctrine()->getRepository(Entreprise::class)->find($request->get('id'));
        //faire un clone de l'entité pour pouvoir comparer modifs
        $entrepriseAvantUpdate= clone $entrepriseUpdate;
        //cretion formalaire lié à l'entité
        $form = $this->createForm(AjoutEntrepriseType::class, $entrepriseUpdate);
        //remove champs nom form
        $form->remove('nom');
        $values=$request->request->all();
        //remove data qui ne servent pas dans le formulaire
        unset($values["X-AUTH-TOKEN"]);
        unset($values['id']);
        unset($values['formation']);
        $errors = array();
        //récupe liste formation
        $formations=$request->get('formation');
        if($formations==null)
        {
            $errors['formation'][] = 'Veuillez saisir une formation';
        }
        //submit form avec values récupérées en post
        $form->submit($values); 
        $date=new \DateTime();
        $historique=unserialize($entrepriseUpdate->getHistoriqueModif());
        //si form valide
        if ($form->isValid()&&$formations!=null) 
        {
            //pour chaque attribut de l'entité qui peut avoir été modifié verif si il a changé ou pas
            foreach(['SecteurActivite', 'Adresse', 'CodePostal','Tel','Mail'] as $field)
            {
                //si il a changé ajouter la modif à l'historique
                if($propertyAccessor->getValue($entrepriseAvantUpdate, $field)!=$propertyAccessor->getValue($entrepriseUpdate, $field))
                {
                    $modif='modif entreprise :'.preg_replace('/(?=(?<!^)[[:upper:]])/', ' ', $field);
                    $historique[$date->format('Y-m-d H:i')][] =$modif ;
                }
            }
            //récup id formations liées à l'entité
            $formationsAvantUpdate=$entrepriseAvantUpdate->getFormation();
            foreach($formationsAvantUpdate as $form)
            {
                $formationsId[]=$form->getId();
            }
            //verif si une formation a été ajoutée ou supprimée
            foreach($formations as $formation)
            {
                if(!in_array($formation,$formationsId))
                {
                    $formationAdd=$this->getDoctrine()->getRepository(Formation::class)->find(intval($formation));
                    if($formationAdd!=null)
                    {
                        $entrepriseUpdate->addFormation($formationAdd);
                    }
                }
            }
             foreach($formationsId as $formation)
            {
                if(!in_array($formation,$formations))
                {
                    $formationAdd=$this->getDoctrine()->getRepository(Formation::class)->find(intval($formation));
                    if($formationAdd!=null)
                    {
                        $entrepriseUpdate->removeFormation($formationAdd);
                    }
                }
            }

            $entrepriseUpdate->setHistoriqueModif(serialize($historique));
            //enregistré update en bdd et retourner reponse
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $response->setContent(json_encode(
                [
                    'ajout'=>'ok',

                ]
            ));
            
           }
      
        else
        {
            foreach ($form->getErrors(true) as $error) 
            {
                $errors[$error->getOrigin()->getName()][] = $error->getMessage();
            }
           $response->setContent(json_encode(
                [
                    'ajout'=>'pas ok',
                    'erreur'=>$errors
                ]
            )); 
        }
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }

    /**
     * @Route("/modif/contact", name="modifContact")
     */
    public function contact()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ModifController.php',
        ]);
    }
    /**
     * @Route("/modif/candidature", name="modifCandidature")
     */
    public function candidature()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ModifController.php',
        ]);
    }
}
