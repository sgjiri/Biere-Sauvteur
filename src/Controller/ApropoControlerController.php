<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApropoControlerController extends AbstractController
{
    #[Route('/apropo', name: 'app_apropo')]
    public function index(): Response
    {
        return $this->render('page/apropo.html.twig', [
            'controller_name' => 'ApropoControlerController',
        ]);
    }
}
