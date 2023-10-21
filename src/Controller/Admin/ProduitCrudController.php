<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ProduitCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Produit::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('Name'),
            TextField::new('description'),
            NumberField::new('price'),
            TextField::new('thumbnail'),
            NumberField::new('stock'),
            NumberField::new('alcohol'),
            NumberField::new('volume'),
            TextField::new('color'),
            TextField::new('color_hex'),
            AssociationField::new('category_id')
                ->setFormTypeOptions([
                    'by_reference' => false,
                    'multiple' => true, // Permet de sélectionner plusieurs catégories
                ]),
        ];
    }
}
