<?php

namespace App\Services;

use App\Document\Auctions;
use Doctrine\ODM\MongoDB\DocumentManager;

class AuctionService
{
    public function test(): string {
        return 'Ca marche !';
    }

    public function getCurrentAmount(string $auctionId, DocumentManager $dm) {

        // récuperez l'objet 'auctions' avec l'id spécifié depuis la basse de données 
        $auction = $dm->getRepository(Auctions::class)->find($auctionId);

        // recupération des offres de l'enchères
        $offres = $auction->getoffre();
        
        // ajout de l'enchere de départ
        $offre[] = $auction->getStartPrice();

        // recherche de la valeur max
        usort($offres, fn($a, $b) => $b['offre'] <=> $a['offre']);

        // récupération de l'offre la plus haute
        return $offres[0]['offre'];
    }
}