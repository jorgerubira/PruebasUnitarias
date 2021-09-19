<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PruebaController extends AbstractController
{
    #[Route('/prueba', name: 'prueba')]
    public function index(): Response
    {
        return $this->render('prueba/index.html.twig', [
            'controller_name' => 'PruebaController',
        ]);
    }

    #[Route('/prueba2', name: 'prueba2')]
    public function index2(): Response
    {
        return $this->render('prueba/index2.html.twig', [
            'controller_name' => 'PruebaController',
        ]);
    }    
}
