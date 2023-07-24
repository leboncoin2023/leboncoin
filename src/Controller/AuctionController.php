<?php

namespace App\Controller;

use App\Document\User;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Document\Auctions;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Form\AuctionType;
//use App\Document\auctions;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations;
use App\Repository\AuctionsRepository;
use App\Repository\CategoryRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

use MongoDB\Client;


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
    public function newAuction(Request $request, DocumentManager $documentManager, CategoryRepository $catRepo): Response
    {
        $auction = new Auctions();
        
        $_SESSION['categoriesList'] = $catRepo->getAllCategoriesAndSub($documentManager);

        $form = $this->createForm(AuctionType::class, $auction);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if (!$form->isValid()) {
                // Afficher les erreurs de validation du formulaire
                foreach ($form->getErrors(true, true) as $error) {
                    echo $error->getMessage()."\n";
                }
            } else {
                $auction->setSellerId($this->getUser()->getId());
                $auction->setBuyerId('');
                // Sauvegardez l'entité Auctions en base de données
                $documentManager->persist($auction);
                $documentManager->flush();

               
                    //   UploadedFile

                // Handle the uploaded picture
              /*  $uploadedPicture = $form->get('pictures')->getData();
                if ($uploadedPicture instanceof UploadedFile) {
                    // Generate a unique filename for the picture and move it to a directory
                    $newFilename = uniqid().'.'.$uploadedPicture->getClientOriginalExtension();
                    $uploadedPicture->move($this->getParameter('pictures_directory'), $newFilename);

                    // Save the picture's filename in the database
                    $auction->setPicture($newFilename);

                    // Persist the updated Auctions entity with the picture filename
                    $documentManager->persist($auction);
                    $documentManager->flush();
                }*/

                  // Handle the uploaded pictures
                  $uploadedPictures = $request->files->get('auction')['pictures'];
                  if (is_array($uploadedPictures)) {
                      $fileNames = [];
                      foreach ($uploadedPictures as $uploadedPicture) {
                          if ($uploadedPicture instanceof UploadedFile) {
                              // Generate a unique filename for the picture and move it to a directory
                              $newFilename = uniqid().'.'.$uploadedPicture->getClientOriginalExtension();
                              $uploadedPicture->move($this->getParameter('pictures_directory'), $newFilename);
                              $fileNames[] = $newFilename;
                          }
                      }
                      // Save the picture filenames in the database
                      $auction->setPictures($fileNames);
  
                      // Persist the updated Auctions entity with the picture filenames
                      $documentManager->persist($auction);
                      $documentManager->flush();
                  }


                 // Récupérez l'identifiant de l'enchère nouvellement créée
                $id = $auction->getId();


                // Redirigez l'utilisateur vers la page de récapitulatif ou une autre page de votre choix
               /* return $this->redirectToRoute('app_auction_new_recap');*/
               return $this->redirectToRoute('app_auction_new_recap', ['id' => $id]);

            }
        }
    
        return $this->render('auction/new_auction.html.twig', [
            'form' => $form->createView(),
            'auction' => $auction,
        ]);
    }

    #[Route('/new_recap/{id}', name: 'app_auction_new_recap')]
    public function newRecap($id, AuctionsRepository $auctionsRepository): Response
    {
    // Récupérez l'enchère à partir de la base de données en utilisant l'identifiant passé en paramètre
    $auction = $auctionsRepository->find($id);

    // Vérifiez si l'enchère existe
    if (!$auction) {
        throw $this->createNotFoundException('L\'enchère n\'existe pas.');
    }

    // Affichez les détails de l'enchère dans la vue
    return $this->render('auction/new_recap.html.twig', [
        'auction' => $auction,
    ]);
    }

    #[Route('/detail/{id}', name: 'app_auction_detail')]
    public function detailAuction(Request $request, DocumentManager $dm ): Response
    {          
        $id = $request->get('id');
        
        // récuperez l'objet 'auctions' avec l'id spécifié depuis la basse de données 
        $dauction = $dm->getRepository(Auctions::class)->find($id);

         //dump($dauction);

        // Vérifiez si l'objet "Auctions" a été trouvé
        if(!$dauction){
            throw $this->createNotFoundException('Auction not found for ID: ' . $id);
        }
      
       return $this->render('auction/detail.html.twig',[
            'dauction' =>  $dauction ,
            'auctionId' => $id
        ]);
    }
    
    /**
     * Ajout une nouvelle enchère
     *
     * @param Request $request
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/save', name: 'app_auction_save')]
    public function saveAuction(Request $request, DocumentManager $dm ): Response {

        // retouve l'id de l'enchère
        $id = $request->get('auctionId');
        
        // recharge l'enchère avec cet id
        $dauction = $dm->getRepository(Auctions::class)->find($id);
        // trouver l'id du user actuel
        $sellerid= $dm->getRepository(User::class)->find($id);
        // modifie l'enchere en y ajoutant un nouveau montant (de user actuel)
        $mauction =    
        // persist de la nouvelle enchere
        $dm->persist('mauction');
        $dm->flush();

        // réaffiche le template de l'enchere
        return $this->render('auction/detail.html.twig',[
            'dauction' =>  $dauction ,
            'auctionId' => $id,
            'seller' => $sellerid,
             'mauction' => $mauction
        ]);
    }
    
//     public function fAuction(Request $request, DocumentManager $dm ): Response {          
//     $id = $request->get('id');
//     $dauction = $dm->getRepository(Auctions::class)->find($id);
 
//     // Vérifiez si l'objet "Auctions" a été trouvé
//     if(!$dauction){
//         throw $this->createNotFoundException('Auction not found for ID: ' . $id);
//     }
//     dump($dauction);
//     $form = $this->createForm(AuctionType::class, $dauction);
//     $form->handleRequest($request);

//     if ($form->isSubmitted() && $form->isValid()) {
//         // Sauvegardez l'entité Auctions en base de données
//         $dm->persist($dauction);
//         $dm->flush();
//     }

//     return $this->render('auction/detail.html.twig', [
//         'dauction' => $dauction,
//         'form' => $form->createView(),
//     ]);
// }

    

   /*  #[Route('/test3', name: 'app_auction_test3')]
    public function test3(AuctionsRepository $auctionsRepository, DocumentManager $dm): Response
    {

        $data =$auctionsRepository->getAuctionsByCategory('Multimédia');

        dd($data);

        return $this->render('category/subcategory.html.twig', [
            'controller_name' => 'AuctionController',
        ]);
    } */




    

   /**
     * @Route("/search", methods={"POST"})
     */
    public function searchAction(Request $request, AuctionsRepository $auctionsRepository): Response
    {
        $form = $this->createForm(SearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $keyword = $form->getData()['keyword'];

            // Rechercher les enchères correspondant au mot clé
            $results = $auctionsRepository->findAuctionsByKeyword($keyword);

            // Renvoyer les résultats à la vue Twig
            return $this->render('auction/search_results.html.twig', [
                'results' => $results,
            ]);
        }

        // Renvoyer le formulaire à la vue Twig pour l'affichage initial
        return $this->render('auction/search_form.html.twig', [
            'form' => $form->createView(), // Assurez-vous que vous avez ajouté cette ligne
        ]);
    }

}