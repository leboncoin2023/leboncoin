<?php

namespace App\Controller;

use App\Repository\AuctionsRepository;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CronController extends AbstractController
{
    #[Route('/cron', name: 'app_cron')]
    public function index(LoggerInterface $logger, AuctionsRepository $auctionsRepository): Response
    {


       


       

        







        $this->log('Ca marche !');
        return new Response('Commande lancée');
    }


    private function log(string $string){

        $file = __DIR__ . '/../../var/log/log.txt';

        $mode = file_exists($file) ? 'a' : 'x+';

        $idFile = fopen($file, $mode);
        
        $time = date("d/m/Y H:i:s");
        fwrite($idFile, "$time : $string\r\n");

        fclose($idFile);
    }
}
