<?php

namespace App\Controller\Admin;

use App\Entity\Suppliers;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SuppliersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Suppliers::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true),
            TextField::new('titre', 'Titre'),
            TextField::new('texte', 'Description')
        ];
    }
}
