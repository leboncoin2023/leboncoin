<?php

namespace App\Repository;

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
}
