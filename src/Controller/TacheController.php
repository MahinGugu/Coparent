<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class TacheController extends AbstractController
{
    /**
     * @return Response
     */

    // #[Route('/taches', name: 'taches')] 
    // Ceci est une autre façon pour le routing, j'ai privilégié le routes.yaml

    public function index(): Response
    {
        return $this->render('taches/taches.html.twig', [
            'current_menu' => 'taches'
        ]);
    }
}
