<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SeriesController extends AbstractController
{
    #[Route('/series', methods:['GET'], name: 'app_series')]
    public function index(): Response
    {
        $series = [
            'Lost',
            'Loki',
            'Breaking bad',
            'Vikings'
        ];

        return $this->render('series/index.html.twig', [
            'controller_name' => 'SeriesController',
            'series' => $series
        ]);
    }
    
    #[Route('/series/new', methods:['GET'], name: 'series_create')]
    public function create(): Response 
    {
        return $this->render(
            'series/new.html.twig'
        );
    }
}
