<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationsController extends AbstractController
{
    #[Route('/prestations', name: 'app_prestations_page')]
    public function index(): Response
    {
        return $this->render('prestations/index.html.twig', [
            'controller_name' => 'PrestationsController',
        ]);
    }

    #[Route('/prestations/show', name: 'app_prestations_show_page')]
    public function show(): Response
    {
        return $this->render('prestations/show.html.twig', [
            'controller_name' => 'PrestationsController',
        ]);
    }
}
