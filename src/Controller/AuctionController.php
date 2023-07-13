<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuctionController extends AbstractController
{
    #[Route('/auction', name: 'app_auction')]
    public function index(): Response
    {
        return $this->render('auction/index.html.twig', [
            'controller_name' => 'AuctionController',
        ]);
    }

//Bonne methode pour ajouter en BDD !!! _________________________________________
    // #[Route('/auction/test', name: 'app_auction_test')]
    // public function createAction(AuctionsRepository $auctionsRepository)
    // {

    //     $auction = new auctions();
    //     $auction->setName('toto');
    //     $auction->setLastname('titi');

    //     $auctions = $auctionsRepository->findAllAuction();
    //     dump($auctions);

    //     return new Response('Created auction  id ');
    // }



    #[Route('/auction/new', name: 'app_auctions_new')]
    public function nouvelleEnchere()
    {
        // Création d'un tableau associatif pour représenter les détails de l'enchère
        $auction = [
            'nom' => "Nouvelle enchère",
            'image' => "chemin/vers/image.jpg",
            'vendeur' => "John Doe",
            'description' => "Description de la nouvelle enchère",
            // ... Autres attributs de l'enchère à définir
        ];

        // Affichage des détails de l'enchère avec var_dump()
        dump($auction);

        // Affichage de la nouvelle enchère dans le template
        return $this->render('auction/nouvelle.html.twig', ['auction' => $auction]);
    }
}
