<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;

class ButiqueController extends AbstractController
{
    #[Route('/butique', name: 'app_butique')]
    public function index(ProduitRepository $produitRepository): Response
{
    $produits = $produitRepository->findAll();


    foreach ($produits as $produit) {
        $categories = $produit->getCategoryId();
        var_dump($categories);

    }

    // Maintenant, vous pouvez utiliser $ids comme tableau d'IDs dans votre template
    return $this->render('page/boutique.html.twig', [
        'controller_name' => 'ButiqueController',
        'produits' => $produits,
    ]);
}


}
