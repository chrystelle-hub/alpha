<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
         function genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
            {
             $chaine = '';
             $max = mb_strlen($listeCar, '8bit') - 1;
             for ($i = 0; $i < $longueur; ++$i) {
             $chaine .= $listeCar[random_int(0, $max)];
             }
             return $chaine;
            }
        $apiToken=genererChaineAleatoire(50);
       
        $user = $security->getUser();
         $entityManager = $this->getDoctrine()->getManager();
        $user->setApiToken($apiToken);
        $entityManager->flush();
        return $this->json(['result' => $apiToken]);
    }
    /**
     * @Route("/token", name="token")
     */
    public function token(Request $request)
    {
         function genererChaineAleatoire($longueur, $listeCar = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ')
            {
             $chaine = '';
             $max = mb_strlen($listeCar, '8bit') - 1;
             for ($i = 0; $i < $longueur; ++$i) {
             $chaine .= $listeCar[random_int(0, $max)];
             }
             return $chaine;
            }
        $apiToken=genererChaineAleatoire(50);
       $id=$request->query->get('id');
         $entityManager = $this->getDoctrine()->getManager();
         $user= $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setApiToken($apiToken);
        $entityManager->flush();
        return $this->json(['result' => $apiToken]);
    }
     /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
    }
}
