<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\User;
use App\Form\AjoutFormationType;
use App\Repository\FormationRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @Route("/admin")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/list/user", name="admin_list_user", methods={"GET"})
     */
    public function list(UserRepository $userRepository, SerializerInterface $serialize)
    {
        $users = $userRepository->findAll();

        $data = $serialize->serialize($users,'json');
        
        return new Response($data,200, [
            'Content-Type' =>'application/json'
        ]);
    }

     /**
     * @Route("/list/formation", name="admin_list_formation", methods={"GET"})
     */
    public function listFormation(FormationRepository $formationRepository, SerializerInterface $serialize)
    {
        $formation = $formationRepository->findAll();

        $data = $serialize->serialize($formation,'json', ['groups'=>'formation']);
        
        return new Response($data,200, [
            'Content-Type' =>'application/json'
        ]);
    }
     /**
     * @Route("/formation/{id}/users", name="admin_list_formation_user", methods={"GET"})
     */
    public function FormationUsers(FormationRepository $formationRepository, SerializerInterface $serialize, $id)
    {
        $formation = $formationRepository->find($id);

        $data = $serialize->serialize($formation,'json', ['groups'=>'formation:users']);
        
        return new Response($data,200, [
            'Content-Type' =>'application/json'
        ]);
    }

    /**
     *
     * @Route("/validate/{id}", name="admin_validate_user", methods={"PUT"})
     */
    public function validation(Request $request, EntityManagerInterface $em, $id)
    {
        $userValidate = $em->getRepository(User::class)->find($id);

        $data = json_decode($request->getContent());
        
        if($userValidate->getEtatCompte() != 1)
        {
            $userValidate->setEtatCompte(1);
            $em->persist($userValidate);
            $em->flush();

        $data = [
            'status'=>200,
            'message'=>'le compte est validé'
        ];

        return new JsonResponse($data);
        } 
        else {
            $data = [
                'statut' => 400,
                'message' => 'le compte est déjà validé'
            ];
        return new JsonResponse($data);
        }


    }
    /**
     * @Route("/add/formation", name="admin_add_formation" method ={"POST"})
     */
    public function addFormation(Request $request, SerializerInterface $serializer ,EntityManagerInterface $em)
    {
        $formation = new Formation();
        $form = $this->createForm(AjoutFormationType::class,$formation);
        $values = $request->request->all();
        unset($values["X-AUTH-TOKEN"]);
        $form->submit($values);

        if($form->isValid())
        {
            $formation = $serializer->deserialize($request->getContent(), Formation::class, 'json');
            $em-> persist($formation);
            $em->flush();

            $data = [
                'status' => 201,
                'message' => 'la formation a bien été ajoutée'
            ];
            $response = new JsonResponse($data, 201);

            $response->headers->set('Access-Control-Allow-Origin', '*');
            return $response;
        }
    }
}