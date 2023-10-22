<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProduitRepository;
use App\Repository\CategoriesRepository;

class ButiqueController extends AbstractController
{
    #[Route('/butique', name: 'app_butique')]
    public function index(ProduitRepository $produitRepository, CategoriesRepository $categoriesRepository): Response
    {
        $produits = $produitRepository->findAll();

        $categoryNames = []; // Créez un tableau pour stocker les noms des catégories

        foreach ($produits as $produit) {
            $categories = $produit->getCategoryId();

            $categoryIds = [];
            foreach ($categories as $category) {
                $categoryIds[] = $category->getId();
            }

            // Maintenant, chargez les noms des catégories correspondantes
            $categoryNames[$produit->getId()] = $categoriesRepository->findBy(['id' => $categoryIds]);
        }
        foreach ($categoryNames as $categoryName){
            
            $categoryName = implode(",", $categoryName);
        }
        return $this->render('page/boutique.html.twig', [
            'controller_name' => 'ButiqueController',
            'produits' => $produits,
            'categoryNames' => $categoryNames, // Passez le tableau des noms des catégories au template
        ]);
    }
}
