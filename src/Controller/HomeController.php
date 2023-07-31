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
    //acces à la page d'acceuil
    #[Route('/home', name: 'app_home')]
    public function index(CategoryRepository $repo, DocumentManager $dm): Response
    {
        //dump($this->getUser());
        $menu = $repo->getAllCategoriesAndSub($dm);

        return $this->render('home/index_home.html.twig', [
            'menu' => $menu,
        ]);
    }

    //acces à la page 404
    #[Route('/notfound', name: 'app_404')]
    public function notfound(CategoryRepository $repo, DocumentManager $dm): Response
    {
        //dump($this->getUser());
        $menu = $repo->getAllCategoriesAndSub($dm);

        return $this->render('base/404.html.twig', [
            'menu' => $menu,
        ]);
    }

    //acces à la page non trouvé
    #[Route('/error', name: 'app_error')]
    public function error(CategoryRepository $repo, DocumentManager $dm): Response
    {
        //dump($this->getUser());
        $menu = $repo->getAllCategoriesAndSub($dm);

        return $this->render('base/error.html.twig', [
            'menu' => $menu,
        ]);
    }


    //acces à la page non trouvé
    #[Route('/en_construction', name: 'app_en_construction')]
    public function enConstruction(CategoryRepository $repo, DocumentManager $dm): Response
    {
        //dump($this->getUser());
        $menu = $repo->getAllCategoriesAndSub($dm);

        return $this->render('base/en_construction.html.twig', [
            'menu' => $menu,
        ]);
    }
}
