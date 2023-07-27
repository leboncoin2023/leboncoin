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
use App\Repository\UserRepository;
use DateInterval;
use DateTime;
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



    #[Route('/', name: 'app_auction')]
    public function index(AuctionsRepository $auctionsRepository, DocumentManager $dm, CategoryRepository $repo): Response
    {
    $auctions = $auctionsRepository->findAllFromBdd();

    return $this->render('auction/index.html.twig', [
        'auctions' => $auctions,
        'menu' => $repo->getAllCategoriesAndSub($dm)
    ]);
    }




/**
 * Propose de choisir entre une vente classique et une enchère
 *
 * @param AuctionsRepository $auctionsRepository
 * @param FormFactoryInterface $formFactory
 * @param CategoryRepository $repo
 * @param DocumentManager $dm
 * @return Response
 */
    #[Route('/new_choice', name: 'app_auction_new_choice')]
    public function newChoice(AuctionsRepository $auctionsRepository, FormFactoryInterface $formFactory, CategoryRepository $repo, DocumentManager $dm): Response
    {

        
        $auctions = $auctionsRepository->findAllFromBdd();
        $form = $formFactory->create(AuctionType::class);

        return $this->render('auction/new_choice.html.twig', [
            //'controller_name' => 'AuctionController',
            'auctions'  => $auctions,
            'form'      => $form->createView(),
            'menu'      => $repo->getAllCategoriesAndSub($dm)
        ]);
    }





    /**
     * Création d'une nouvelle enchère
     *
     * @param Request $request
     * @param DocumentManager $documentManager
     * @param CategoryRepository $catRepo
     * @return Response
     */
    #[Route('/new_auction', name: 'app_auction_new_auction')]
    public function newAuction(Request $request, DocumentManager $documentManager, CategoryRepository $catRepo): Response
    {

        if (!$this->getUser())
            return $this->redirectToRoute('app_login');

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
                //Enregistrement de l'id du user dans le seller_id et dans le buyer_id.
                $auction->setSellerId($this->getUser()->getId());
                $auction->setBuyerId('');

                //calcule de la date de fin
                $time   =  $auction->getStartDate()->format('Y-m-d').' '.date('H:i:s');
                $dt     = new DateTime($time);
                /** @var DateTime $time */
                $dt->add(new DateInterval('PT'.$auction->getDuration().'H'));

                $auction->setEndDate($dt);  

                // Sauvegardez l'entité Auctions en base de données
                $documentManager->persist($auction);
                $documentManager->flush();

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
            'form'      => $form->createView(),
            'auction'   => $auction,
            'menu'      => $catRepo->getAllCategoriesAndSub($documentManager),
            
        ]);
    }




    /**
     * Récapitulatif de l'enchère venant d'être créée
     */
    #[Route('/new_recap/{id}', name: 'app_auction_new_recap')]
    public function newRecap($id, AuctionsRepository $auctionsRepository, CategoryRepository $repo, DocumentManager $dm): Response
    {
        // Récupérez l'enchère à partir de la base de données en utilisant l'identifiant passé en paramètre
        $auction = $auctionsRepository->find($id);

        // Vérifiez si l'enchère existe
        if (!$auction) {
            throw $this->createNotFoundException('L\'enchère n\'existe pas.');
        }

        // Affichez les détails de l'enchère dans la vue
        return $this->render('auction/new_recap.html.twig', [
            'auction'   => $auction,
            'menu'      => $repo->getAllCategoriesAndSub($dm)
        ]);
    }




    /**
     * Affichage du détail de l'enchère ( page permettant d'enchérir )
     */
    #[Route('/detail/{id}', name: 'app_auction_detail')]
    public function detailAuction(Request $request, DocumentManager $dm, CategoryRepository $repo, UserRepository $userRepository ): Response
    {          

        $id = $request->get('id');

        // récuperez l'objet 'auctions' avec l'id spécifié depuis la basse de données 
        $dauction = $dm->getRepository(Auctions::class)->find($id);

        $seller = $userRepository->findUserById($dauction->getSellerId());
       

        $tabOffre = $dauction->getoffre();
        if(!empty($tabOffre)){
            usort($tabOffre, fn($a, $b) => $b['offre'] <=> $a['offre']);
            $oldMaxPrice    = $tabOffre[0]['offre'];
        }else{
            $oldMaxPrice = $dauction->getStartPrice();
        }


        if(null != $request->request->get('offre')){


            if(empty($tabOffre)){
            
                $oldMaxPrice = $dauction->getStartPrice();
            }
            $offre  = $request->request->get('offre');

            if($offre > $oldMaxPrice){
                $tabOffre[] = ['offerUserId' => $this->getUser()->getId(), 'offre' => $offre, 'date' => date('Y-m-d h:i:s')];
                $dauction   ->setoffre($tabOffre);
                $dm         ->persist($dauction);
                $dm         ->flush();
                $oldMaxPrice = $offre;

                $this->addFlash(
                    'success',
                    'Votre offre a bien été enregistrée.'
                );

            }else {
                $this->addFlash(
                    'danger',
                    'Montant insuffisant !'
                );
            }


        }
        // Vérifiez si l'objet "Auctions" a été trouvé
        if(!$dauction){
            throw $this->createNotFoundException('Auction not found for ID: ' . $id);
        }
      
       return $this->render('auction/auction_detail_buyer.html.twig',[
            'dauction'      =>  $dauction ,
            'auctionId'     => $id,
            'menu'          => $repo->getAllCategoriesAndSub($dm),
            'CurrentValue'  => $oldMaxPrice,
            'seller'        => $seller
        ]);
    }
    
  

/**
 * Ayoub sais ce que c'est....
 *
 * @param Request $request
 * @param DocumentManager $dm
 * @param CategoryRepository $repo
 * @return Response
 */
    #[Route('/save', name: 'app_auction_save')]
    public function saveAuction(Request $request, DocumentManager $dm, CategoryRepository $repo ): Response {

        // retouve l'id de l'enchère
        $id = $request->get('auctionId');
        
        // recharge l'enchère avec cet id
        $dauction = $dm->getRepository(Auctions::class)->find($id);
        // trouver l'id du user actuel
        $sellerid= $dm->getRepository(User::class)->find($id);
        // modifie l'enchere en y ajoutant un nouveau montant (de user actuel)
        $mauction =    
        // persist de la nouvelle enchere
        $dm->persist($dauction);
        $dm->flush();

        // réaffiche le template de l'enchere
        return $this->render('auction/detail.html.twig',[
            'dauction'  =>  $dauction ,
            'auctionId' => $id,
            'seller'    => $sellerid,
             'mauction' => $mauction,
             'menu'     => $repo->getAllCategoriesAndSub($dm)
        ]);
    }
    

    /**
     * Ayoub sais ce que c'est....
     *
     * @param Request $request
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/saveform', name: 'app_auction_saveform')]
    public function fAuction(Request $request, DocumentManager $dm ): Response {
        $id = $request->get('id');
        $dauction = $dm->getRepository(Auctions::class)->find($id);

        // Vérifiez si l'objet "Auctions" a été trouvé
        if(!$dauction){
        throw $this->createNotFoundException('Auction not found for ID: ' . $id);
        }
            $form = $this->createForm(AuctionType::class, $dauction);
            $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        // Sauvegardez l'entité Auctions en base de données
            $dm->persist($dauction);
            $dm->flush();
        }

        return $this->render('auction/detail.html.twig', [
            'dauction' => $dauction,
            'form' => $form->createView(),
        ]);
    }
 

    /**
     * Permet de faire une recherche dans la barre de recherche du header
     *
     * @param Request $request
     * @param AuctionsRepository $auctionsRepository
     * @param CategoryRepository $repo
     * @param DocumentManager $dm
     * @return Response
     */
    #[Route('/search', name: 'app_auction_search')]
    public function searchAuction(Request $request, AuctionsRepository $auctionsRepository, CategoryRepository $repo, DocumentManager $dm): Response {

        $keyword    = $request->get('keyword');
        $result     = $auctionsRepository->findAuctionsByKeyword($keyword);
        
        // Renvoyer le formulaire à la vue Twig pour l'affichage initial
        return $this->render('auction/search_results.html.twig', [
            'auctions'  => $auctionsRepository->findAllAuction(),
            'menu'      => $repo->getAllCategoriesAndSub($dm),
            'results'   => $result,
            'keyword'   => $keyword

        ]);
    }


 
    
    

}
