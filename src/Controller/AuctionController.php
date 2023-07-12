<?php

namespace App\Controller;

use App\Document\auctions;
use App\Repository\AuctionsRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
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


    #[Route('/auction/test', name: 'app_auction_test')]
     public function createAction(AuctionsRepository $auctionsRepository)
     {

        $auction = new auctions ();
        $auction->setName('toto');
        $auction->setLastname('titi');
        
        $auctions = $auctionsRepository->findAllAuction();
        dump($auctions);

        return new Response('Created auction  id ');

         
     }


}
