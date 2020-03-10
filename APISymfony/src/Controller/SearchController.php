<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Entreprise;
use App\Form\SearchType;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function search(Request $request)
    {
        $form = $this->createForm(SearchType::class,null);
        $values=$request->request->all();
        //remove data qui ne servent pas dans le formulaire
        unset($values["X-AUTH-TOKEN"]);
        $form->submit($values); 
        $errors = array();
        $response= new Response;
        if ($form->isValid())
        {
            //recup données form pour faire la recherche
            $data=$form->getData();
            $departement=$data['departement'];
            $nom=$data['nom'];
            $secteur_activite=$data['secteur_activite'];
            $formation=$data['formation'];
            $formation_liste=[];
            $entreprise_liste=[];
            //requete de recherche
            $entreprises = $this->getDoctrine()->getRepository(Entreprise::class)->findBySearch($departement,$nom,$secteur_activite,$formation);
            //recup infos
            foreach ($entreprises as  $entreprise) 
            {
                $id=$entreprise->getId();
                $nom=$entreprise->getNom();
                $secteur_activite=$entreprise->getSecteurActivite();
                $code_postal=$entreprise->getCodePostal();
                $formations=$entreprise->getFormation();
                foreach($formations as $formation)
                {
                    $formation_liste[]=$formation->getTag();
                }
                $entreprise_liste[]=['id'=>$id,'nom'=>$nom,'code_postal'=>$code_postal,'secteur_activite'=>$secteur_activite,'tag'=>$formation_liste];
            }
            $response->setContent(json_encode(
                [
                    'entreprise'=>$entreprise_liste,
                    
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
                    'erreur'=>$errors,
                ]
            )); 
        }
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
}
