<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ButiqueController extends AbstractController
{
    #[Route('/butique', name: 'app_butique')]
    public function index(): Response
    {
        return $this->render('page/boutique.html.twig', [
            'controller_name' => 'ButiqueController',
        ]);
    }
}
