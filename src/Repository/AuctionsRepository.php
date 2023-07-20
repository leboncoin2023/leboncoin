<?php

namespace App\Repository;

use Doctrine\ODM\MongoDB\Mapping\Annotations;
use App\Document\Auctions;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class AuctionsRepository extends ServiceDocumentRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Auctions::class);
    }
   
    public function findAllAuction()
    {
        return $this->findAll();
    }


    public function findAllFromBdd() : array
    {
        return $this->findAll();
    }

    public function findById($userId) : array
    {
        return $this->findBy(['id' => $userId]);
    }

    public function getAuctionsByCategory(string $category): array {

        // créer tableau résultat vide
        $result = [];

        // trouver toutes les sous categories de la categories demandée

        $result= $this->dm->createQueryBuilder(Auctions::class)
                        ->distinct('Multimédia/{category}')
                        ->getQuery()
                        ->execute();

        

    



        // exploser categories et sous categories

        // pour chaque sous categorie

            // trouver en BDD n enchère de cette catégorie/sous catégorie

            // Ajouter les n enchères au tableau de résultat (dans le tiroir sous categories)

        // fin pour

        // obtenir :
        /****************
         $result = [
            'Informatique' => [
                0 => objet enchère,
                1 => objet enchère,
                2 => objet enchère,
                3 => objet enchère,
            ],
            'Consoles' => [
                0 => objet enchère,
                1 => objet enchère,
                2 => objet enchère,
                3 => objet enchère,
            ],
            'Image' => [
                0 => objet enchère,
                1 => objet enchère,
                2 => objet enchère,
                3 => objet enchère,
            ],
         ]
         ************/
        return $result;
    }
}
