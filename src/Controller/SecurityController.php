<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    /**
     * Connexion de l'utilisateur
     *
     * @param AuthenticationUtils $authenticationUtils
     * @param CategoryRepository $repo
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, CategoryRepository $repo, DocumentManager $dm): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();




            
            



        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 'error' => $error,
            'menu' => $repo->getAllCategoriesAndSub($dm)
        ]);
    }


    /**
     * Déconnexion de l'utilisateur
     *
     * @return void
     */
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');


        return $this->render('home/index_home.html.twig');
    }
}
