<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    
    #[Route('/', name: 'app_user')]
    public function index(Request $request, DocumentManager $dm,CategoryRepository $repo): Response
    {

        if (!$this->getUser())
        return $this->redirectToRoute('app_login');


        $id = $this->getUser()->getId();


        return $this->render('user/index.html.twig', [
            'id' => $id,
            'menu'      => $repo->getAllCategoriesAndSub($dm)
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
    
}
