<?php

namespace App\Repository;

use Doctrine\ODM\MongoDB\Mapping\Annotations;
use App\Document\Auctions;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Validator\Constraints\Regex;

use function MongoDB\create_field_path_type_map;

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


    /**
     * Trouve des enchères par catégory (et sous catégorie)
     *
     * @param string $category
     * @param integer $limit
     * @return array
     */
    public function findAuctionsByCategoryAndSub(string $category, int $limit = 0): array{


        $qb = $this->dm->createQueryBuilder(Auctions::class)
                ->field('category')->equals($category);
        
        if($limit)
            $qb->limit($limit);


        $iter = $qb->getQuery()->execute();

        $results = [];
        while ($iter->valid()) {
            $results[] = $iter->current();
            $iter->next();
        }

        return $results;
    }
    
    
    public function getAuctionsByCategory(string $category): array {

        // créer tableau résultat vide
        $result = [];

        // trouver toutes les sous categories de la categories demandée
        $categories = $this->createQueryBuilder(Auctions::class)
                        ->field('category')->equals(new \MongoDB\BSON\Regex($category, 'i'))
                        ->distinct('category')
                        ->getQuery()
                        ->execute();

        // pour chaque sous categorie
        foreach ($categories as $category) {
            // exploser categories et sous categories
            $name = explode('/', $category)[1];

            // trouver en BDD n enchères de cette catégorie/sous catégorie
            $datas = $this->findAuctionsByCategoryAndSub($category, 10);

            // crée la sous catégorie
            $result[] = [
                'name' => $name,
                'auctions' => $datas // Ajouter les n enchères au tableau de résultat (dans le tiroir sous categories)
            ];

        }
            
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
