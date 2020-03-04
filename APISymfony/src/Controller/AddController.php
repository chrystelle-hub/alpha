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

class AddController extends AbstractController
{
    /**
     * @Route("/add/entreprise", name="AjoutEntreprise")
     */
    public function entreprise(Request $request)
    {
        $entreprise = new Entreprise();
        $response = new Response();
        $form = $this->createForm(AjoutEntrepriseType::class, $entreprise);
        $values=$request->request->all();
        unset($values["X-AUTH-TOKEN"]);
        unset($values['formation']);
        $form->submit($values); 
        $errors = array();
        $formations=$request->get('formation');
        if($formations==null)
        {
            $errors['formation'][] = 'Veuillez saisir une formation';
        }
        if ($form->isValid()&&$formations!=null) 
        {
            $entreprise->setDepartement(substr($entreprise->getCodePostal(), 0, 2));
            foreach($formations as $formation)
            {
                $formationAdd=$this->getDoctrine()->getRepository(Formation::class)->find(intval($formation));
                if($formationAdd!=null)
                {
                    $entreprise->addFormation($formationAdd);
                }
            }
            $date=new \DateTime();
            $modif='ajout';
            $historique[$date->format('Y-m-d H:i')][] =$modif ;
            $entreprise->setHistoriqueModif(serialize($historique));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entreprise);
            $entityManager->flush();
            $response->setContent(json_encode(
                [
                    'ajout'=>'ok'
                ]
            ));
            
           }
      
        else
        {
           
            foreach ($form->getErrors(true) as $error) {
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
     * @Route("/add/contact", name="AjoutContact")
     */
    public function contact(Request $request)
    {
        $contact = new Contact();
        $response = new Response();
        $form = $this->createForm(AjoutContactType::class, $contact);
        $values=$request->request->all();
        unset($values["X-AUTH-TOKEN"]);
        $form->submit($values); 
      
        if ($form->isValid()) {
          
            $entreprise=$this->getDoctrine()->getRepository(Entreprise::class)->find($request->get('entreprise'));
            $contact->setEntreprise($entreprise);
            $date=new \DateTime();
            $historique=unserialize($entreprise->getHistoriqueModif());
            $modif='ajout contact :'.$request->get('nom').', '.$request->get('fonction');
            $historique[$date->format('Y-m-d H:i')][] =$modif ;
            $entreprise->setHistoriqueModif(serialize($historique));
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $response->setContent(json_encode(
                [
                    'ajout'=>'ok'
                ]
            ));
            
           }
      
        else
        {
             $errors = array();
            foreach ($form->getErrors(true) as $error) {
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
     * @Route("/add/candidature", name="AjoutCandidature")
     */
   public function candidature(Request $request)
    {
        $candidature = new Candidature();
        $response = new Response();
        $form = $this->createForm(AjoutCandidatureType::class, $candidature);
        $values=$request->request->all();
        unset($values["X-AUTH-TOKEN"]);
        $form->submit($values); 
      
        if ($form->isValid()) {
          
            $entreprise=$this->getDoctrine()->getRepository(Entreprise::class)->find($request->get('entreprise'));
            $candidature->setEntreprise($entreprise);
            $user= $this->getDoctrine()->getRepository(User::class)->findOneBy(['apiToken' => $request->request->get('X-AUTH-TOKEN')]);
            $candidature->setUser($user);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($candidature);
            $entityManager->flush();
            $response->setContent(json_encode(
                [
                    'ajout'=>'ok'
                ]
            ));
            
           }
      
        else
        {
             $errors = array();
            foreach ($form->getErrors(true) as $error) {
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
}
