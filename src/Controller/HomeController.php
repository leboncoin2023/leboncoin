<?php

// indique le namespace où se trouve le contrôleur.
namespace App\Controller;

use App\Repository\CategoryRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
/*
class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/HomeController.php',
        ]);
    }
}*/

/**
 * Contrôleur gérant les actions liées à la page d'accueil.
 */
class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(CategoryRepository $repo, DocumentManager $dm): Response
    {

        $menu = $repo->getAllCategoriesAndSub($dm);

        return $this->render('home/index_home.html.twig', [
            'menu' => $menu,
        ]);
    }
}
