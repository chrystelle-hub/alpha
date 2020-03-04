<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Candidature;


class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/candidature", name="profilCandidature")
     
     */
    //recup candidatures user
    public function candidatures(Request $request)
    {
         $user=$this->getDoctrine()->getRepository(User::class)->findOneBy(['apiToken' => $request->request->get('X-AUTH-TOKEN')]);
        $response=new Response();
        $candidatures=$user->getCandidatures();
        $candidature_user=[];
        foreach($candidatures as $candidature)
        {
            $candidature_user[]=['id'=>$candidature->getId(),'date'=>$candidature->getDateEnvoieCandidature(),'entreprise'=>$candidature->getEntreprise()->getNom()];
        }
         
        $response->setContent(json_encode(
            [
                'candidature'=>$candidature_user
            ]
        )); 
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
    }
     /**
     * @Route("/profil", name="profil")
     
     */
    public function index2(Request $request)
    {
       
       return $this->json(['result' => $request->get('X-AUTH-TOKEN')]);
    
    }
}
