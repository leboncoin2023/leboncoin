<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function category(): Response
    {
        return $this->render('category/category.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }

    #[Route('/subcategory', name: 'app_subcategory')]
    public function subCategory(): Response
    {
        return $this->render('category/subcategory.html.twig', [
            'controller_name' => 'CategoryController',
        ]);
    }
}
