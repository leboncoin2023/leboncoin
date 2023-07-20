<?php

namespace App\Controller;

use App\Repository\AuctionsRepository;
use App\Repository\CategoryRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category')]
class CategoryController extends AbstractController
{

    #[Route('/nav', name: 'app_category_nav')]
    public function buildCategoriesNav(CategoryRepository $repo, DocumentManager $dm): Response {

        $menu = $repo->getAllCategoriesAndSub($dm);
    

        return $this->render('category/nav.html.twig', [
            'menu' => $menu,
        ]);
    }

    /**
     * Route listant des enchère d'une catégorie avec classement par sous catégories
     *
     * @return Response
     */
    #[Route('/{category}', name: 'app_category')]
    public function category(string $category, AuctionsRepository $repo): Response
    {
        $auctions = $repo->getAuctionsByCategory($category);

        return $this->render('category/category.html.twig', [
            'auctions' => $auctions,
        ]);
    }

    /**
     * Route listant les enchères d'une sous catégorie
     */
    #[Route('/{category}/{subcategory}', name: 'app_subcategory')]
    public function subCategory(Request $request): Response
    {      


        dump($request->get('subcategory'));
        // Récupérer la sous-catégorie transmise en GET


        // Rechercher dans la base de données les enchères qui correspondent à cette sous-catégorie


        // Vérifier l'existence de données trouvées dans la bdd


        // Traiter les données récupérées (filtres à ta discrétion)


        // Appeler l'affichage en passant les paramètres nécessaires        
        return $this->render('category/subcategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
