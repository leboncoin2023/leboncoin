<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/edit', name: 'app_user_edit')]
    public function edit(): Response
    {
        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/auction', name: 'app_user_auction')]
    public function auction(): Response
    {
        return $this->render('user/auction.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/user/delete', name: 'app_user_delete')]
    public function delete(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/profil', name: 'profile')]
    public function profile(): Response
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Vérifier si l'utilisateur est connecté
        if (!$user) {
            // Rediriger vers la page de connexion ou afficher un message d'erreur
            // en cas d'accès non autorisé.
            // Par exemple, pour rediriger vers la page de connexion :
            return $this->redirectToRoute('app_login');
        }

        // Récupérer l'ID de l'utilisateur connecté
        $userId = $user->getId();

        // Maintenant, vous pouvez utiliser $userId pour récupérer les informations
        // spécifiques de l'utilisateur depuis votre base de données ou autre source de données.

        // Par exemple, si vous avez un repository pour la classe User, vous pouvez faire quelque chose comme ceci :
        $userRepository = $this->getRepository(User::class);
        $user = $userRepository->find($userId);

        // Vous pouvez ensuite passer les informations de l'utilisateur à votre vue Twig pour les afficher
        return $this->render('vente/profil.html.twig', [
            'user' => $user,
        ]);
    }

    // ...
}


    return $this->render('user/show.html.twig', [
        'utilisateur' => $utilisateur,
    ]);


// ... (other actions)*/




