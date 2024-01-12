<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OlaMundoController extends AbstractController
{
    #[Route('/ola_mundo', name: 'app_ola_mundo')]
    public function index(Request $request): Response
    {
        // dd($request->query->get('id'));
        return new Response(
            "id: " . $request->query->get('id'),
            200,
            [
                'X-HEADER-QUALQUER' => 'Um header qualquer'
            ]
        );
    }
}
