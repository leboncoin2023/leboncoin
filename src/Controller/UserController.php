<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user')]
    public function index(): Response
    {
        // Afficher la liste des utilisateurs
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/{id}', name: 'app_user_show', requirements: ['id' => '\d+'])]
    public function show(int $id): Response
    {
        // Afficher les détails de l'utilisateur avec l'ID spécifié
        return $this->render('user/show.html.twig', [
            'controller_name' => 'UserController',
            'user_id' => $id,
        ]);
    }

    #[Route('/edit', name: 'app_user_edit')]
    public function edit(): Response
    {
        // Afficher le formulaire d'édition de l'utilisateur
        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/auction', name: 'app_user_auction')]
    public function auction(): Response
    {
        // Afficher les enchères de l'utilisateur
        return $this->render('user/auction.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/delete', name: 'app_user_delete')]
    public function delete(): Response
    {
        //  supprimer l'utilisateur
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
