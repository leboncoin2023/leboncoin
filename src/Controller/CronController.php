<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CronController extends AbstractController
{
    #[Route('/cron', name: 'app_cron')]
    public function index(LoggerInterface $logger): Response
    {
        $logger->info('Hop !');
        return new Response('Zou !');
    }
}
