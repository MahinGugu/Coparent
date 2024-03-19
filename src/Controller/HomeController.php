<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class HomeController extends AbstractController
{
    /**
     * @return Response
     */

    // #[Route('/home', name: 'home')]
    // Ceci est une autre façon pour le routing, j'ai privilégié le routes.yaml

    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'current_menu' => 'home'
        ]);
    }
}
