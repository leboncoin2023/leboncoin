<?php

namespace App\Controller;


USE Symfony\Component\Form\FormView;


use App\Document\Auctions;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Form\AuctionType;
//use App\Document\auctions;
use Symfony\Component\Form\FormFactoryInterface;


use Doctrine\ODM\MongoDB\Mapping\Annotations;

use App\Repository\AuctionsRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/auction')]
class AuctionController extends AbstractController
{
//home___________________________________________________________

    /*
    #[Route('/', name: 'app_auction')]
    public function index(): Response
    {

        
        return $this->render('auction/index.html.twig', [
            'controller_name' => 'AuctionController',
        ]);
    }

    */

    #[Route('/', name: 'app_auction')]
    public function index(AuctionsRepository $auctionsRepository): Response
    {
    $auctions = $auctionsRepository->findAllFromBdd();

    return $this->render('auction/index.html.twig', [
        'auctions' => $auctions,
    ]);
    }




//Nouvelle annonce, choix entre enchère et vente ___________________________
    #[Route('/new_choice', name: 'app_auction_new_choice')]
    public function newChoice(AuctionsRepository $auctionsRepository, FormFactoryInterface $formFactory): Response
    {

        
        $auctions = $auctionsRepository->findAllFromBdd();
        $form = $formFactory->create(AuctionType::class);

        return $this->render('auction/new_choice.html.twig', [
            //'controller_name' => 'AuctionController',
            'auctions' => $auctions,
            'form' => $form->createView(),
        ]);
    }
//Nouvelle enchère, formulair de création____________________________________
/*    #[Route('/new_auction', name: 'app_auction_new_auction')]
    public function newAuction(): Response
    {

        return $this->render('auction/new_auction.html.twig', [
            'controller_name' => 'AuctionController',
        ]);
    }*/

    /*
    #[Route('/new_auction', name: 'app_auction_new_auction')]
    public function newAuction(Request $request, DocumentManager $documentManager): Response
    {
        $auction = new Auctions();
        $form = $this->createForm(AuctionType::class, $auction);
        $form->handleRequest($request);
         
      //  ob_start(); // Démarre la capture de sortie
     //   var_dump($form); // Utilisation de var_dump()
      //  $output = ob_get_clean(); // Récupère la sortie de var_dump() et arrête la capture

      if ($form->isSubmitted() && $form->isValid()) {
      //if ($form->isSubmitted()) {
        
           
           // var_dump($auction);

            // Sauvegardez l'entité Auctions en base de données
            $documentManager->persist($auction);
            $documentManager->flush();
            //dump('test');
            // Redirigez l'utilisateur vers la page de récapitulatif ou une autre page de votre choix
            return $this->redirectToRoute('app_auction_new_recap');
        }

        return $this->render('auction/new_auction.html.twig', [
            'form' => $form->createView(),
            'auction' => $auction,

           // 'debug_output' => $output, // Passer la sortie de débogage à la vue

        ]);
    } */

    #[Route('/new_auction', name: 'app_auction_new_auction')]
    public function newAuction(Request $request, DocumentManager $documentManager): Response
    {
        $auction = new Auctions();
        $form = $this->createForm(AuctionType::class, $auction);
        $form->handleRequest($request);
             
        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                foreach ($form->getErrors(true, true) as $error) {
                    echo $error->getMessage()."\n";
                }
            } else {
                // Sauvegardez l'entité Auctions en base de données
                $documentManager->persist($auction);
                $documentManager->flush();
    
                // Redirigez l'utilisateur vers la page de récapitulatif ou une autre page de votre choix
                return $this->redirectToRoute('app_auction_new_recap');
            }
        }
    
        return $this->render('auction/new_auction.html.twig', [
            'form' => $form->createView(),
            'auction' => $auction,
        ]);
    }









//Recap et validation de la nouvelle enchère_______________________________
    #[Route('/new_recap', name: 'app_auction_new_recap')]
    public function newRecap(): Response
    {

        $auction = new Auctions();
        //dump('test 2');
        return $this->render('auction/new_recap.html.twig', [
            'auction' => $auction,
        ]);
    }


    /*#[Route('/test', name: 'app_auction_test')]
     public function createAction(AuctionsRepository $auctionsRepository)
     {

        $auction = new auctions ();
        $auction->setName('toto');
        $auction->setLastname('titi');
        
        $auctions = $auctionsRepository->findAllAuction();
        //dump($auctions);

        return new Response('Created auction  id ');

         
     }*/




     #[Route('/test2', name: 'app_auction_test')]
    public function test(AuctionsRepository $auctionsRepository): Response
    {

        $alldata = $auctionsRepository->findAllFromBdd();
         $id = $alldata[1]->getId();
         $auctionById = $auctionsRepository->findById($id);


        dd($auctionById);

        return $this->render('auction/index.html.twig', [
            'controller_name' => 'AuctionController',
        ]);
    }


}
