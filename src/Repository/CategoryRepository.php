<?php

namespace App\Repository;

use App\Document\Auctions;
use App\Document\Category;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\ODM\MongoDB\DocumentManager;

class CategoryRepository extends ServiceDocumentRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }
   
    public function findCategory($value)
    {
        return;
    }

    /**
     * Crée le tableau des catégories et sous catégories
     *
     * @param DocumentManager $dm
     * @return array
     */
    public function getAllCategoriesAndSub(DocumentManager $dm): array {

        $categoriesRaw = $this->dm->createQueryBuilder(Auctions::class)
                        ->distinct('category')
                        ->getQuery()
                        ->execute();

        $nav = [];
        // boucle sur toutes les categories en BDD
        foreach ($categoriesRaw as $raw) {
            $matches = [];

            // récupère la catégorie et sous catégorie
            if (!preg_match('/^([\S\s]+)\/([\S\s]+)$/i', $raw, $matches))
                continue;

            // récupération de la catégory et sous catégorie
            $category = $matches[1];
            $subCategory = $matches[2];

            // créer le tableau de la catégorie si elle n'existe pas déjà
            if (!isset($nav[$category]))
                $nav[$category] = [];

            // ajoute la sous categorie dans la catégorie
            $nav[$category][] = $subCategory;
        }

        return $nav;
    }

   

    //    /**
//     * @return Message[] Returns an array of Message objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Message
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

