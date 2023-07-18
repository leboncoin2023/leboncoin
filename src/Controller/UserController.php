<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    
    #[Route('/', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/edit', name: 'app_user_edit')]
    public function edit(): Response
    {
        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/auction', name: 'app_user_auction')]
    public function auction(): Response
    {
        return $this->render('user/auction.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/delete', name: 'app_user_delete')]
    public function delete(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
        
    }
  
 /*#[Route('/{id}', name: 'app_user_show')]
public function show($id): Response
{
    $entityManager = $this->getDoctrine()->getManager();
    $utilisateur= $entityManager->getRepository(User::class)->find($id);

    if (!$utilisateur) {
        throw $this->createNotFoundException('utilisateur not found with id '.$id);
    }

    return $this->render('user/show.html.twig', [
        'utilisateur' => $utilisateur,
    ]);
}

// ... (other actions)*/


