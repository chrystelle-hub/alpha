<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class ProfilController extends AbstractController
{
    /**
     * @Route("/profil2", name="profil2")
     
     */
    public function index(Request $request)
    {
       
         return $this->json(['result' => $request->get('X-AUTH-TOKEN')]);

    
    }
     /**
     * @Route("/profil", name="profil")
     
     */
    public function index2(Request $request)
    {
       
       return $this->json(['result' => $request->get('X-AUTH-TOKEN')]);
    
    }
}
