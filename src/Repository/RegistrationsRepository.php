<?php

namespace App\Repository;

use App\Document\Registers;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;


class AuctionsRepository extends ServiceDocumentRepository
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Registers::class);
    }
   
    public function findAllRegister()
    {
        return $this->findAll();
    }


   
}
