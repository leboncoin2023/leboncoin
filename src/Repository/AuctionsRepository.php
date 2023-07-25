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
   

    /**
     * Trouve toutes les enchères
     *
     * @return void
     */
    public function findAllAuction()
    {
        return $this->findAll();
    }

    /**
     * trouve aussi toutes les enchères....
     *
     * @return array
     */
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


        $results = $qb->getQuery()->execute()->toArray();

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
            $stringCategory = explode('/', $category)[0];
            $stringSubCategory = '';
            if(isset(explode('/', $category)[1])){
                $stringSubCategory = explode('/', $category)[1];
            }

            // trouver en BDD n enchères de cette catégorie/sous catégorie
            $datas = $this->findAuctionsByCategoryAndSub($category, 10);

            // crée la sous catégorie
            $result = [
                'category' => $stringCategory,
                'subcategory' => $stringSubCategory,
                'auctions' => $datas // Ajouter les n enchères au tableau de résultat (dans le tiroir sous categories)
            ];

        }
            
        return $result;
    }

       

    /**
     * trouve des enchère correspondant au mot tapé dans la barre de recherche
     *
     * @param string $keyword
     * @return void
     */
    public function findAuctionsByKeyword(string $keyword)
    {

        $qb = $this ->createQueryBuilder(Auctions::class)
                    ->field('$or')
                    ->equals([
                        ['title' => new \MongoDB\BSON\Regex($keyword, 'i')],
                        ['description' => new \MongoDB\BSON\Regex($keyword, 'i')]
        ]);

        return $qb->getQuery()->execute()->toArray();
    }





    /**
     * Trouve des enchères par catégorie
     *
     * @param string $category
     * @return void
     */
    public function getAuctionByCategory(string $category){
        // créer tableau résultat vide
        $result = [];

        // trouver toutes les sous categories de la categories demandée
        $categories = $this ->createQueryBuilder(Auctions::class)
                            ->field('category')->equals(new \MongoDB\BSON\Regex($category, 'i'))
                            ->distinct('category')
                            ->getQuery()
                            ->execute();

        foreach ($categories as $category) {
            // exploser categories et sous categories
            $stringCategory = explode('/', $category)[0];
            $stringSubCategory = '';
            if(isset(explode('/', $category)[1])){
                $stringSubCategory = explode('/', $category)[1];
            }
            if($stringSubCategory != ""){

                $tab = array(
                    'subcategory' => $stringSubCategory,
                    'auctions' => $this->findAuctionsByCategoryAndSub($stringCategory.'/'.$stringSubCategory, 10)
                );

                $result[] = $tab;

            }
        }

        return $result;
    }

 

}
