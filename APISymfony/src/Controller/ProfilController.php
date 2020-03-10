<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Entity\Candidature;
use App\Entity\Formation;
use App\Repository\UserRepository;
use Symfony\Component\Serializer\SerializerInterface;

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
            $candidature_user[]=['id'=>$candidature->getId(),'date'=>$candidature->getDateEnvoieCandidature(),'entreprise'=>$candidature->getEntreprise()->getNom(), 'etat'=>$candidature->getEtat()];
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
     * @Route("/profil", name="profil_id")
     */
    
    public function index(Request $request)
    {
        $user=$this->getDoctrine()->getRepository(User::class)->findOneBy(['apiToken' => $request->request->get('X-AUTH-TOKEN')]);
     
        $formations=$user->getFormation();
        $formations_liste=[];
        foreach($formations as $formation)
        {
            $formations_liste[]=$formation->getNom();
        }
        $response=new Response();
        $candidatures=$user->getCandidatures();
        $candidature_user=[];
        foreach($candidatures as $candidature)
        {
            $candidature_user[]=[
                'id'=>$candidature->getId(),
                'date'=>$candidature->getDateEnvoieCandidature(),
                'entreprise'=>$candidature->getEntreprise()->getNom(), 
                'etat'=>$candidature->getEtat()];
        }
        $infos_user = [];
        
    
        $infos_user[]=[
            'id'=>$user->getId(),
            'nom'=>$user->getNom(),
            'prenom'=>$user->getPrenom(),
            'email'=>$user->getEmail(),
            'role'=>$user->getRoles(),
            'formation'=>$formations_liste
        ];
        
        $response->setContent(json_encode(
            [
                'user'=>$infos_user,
                'candidature'=>$candidature_user
            ]
        )); 
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
       //return $this->json(['result' => $request->get('X-AUTH-TOKEN')]);
    
    }
}
