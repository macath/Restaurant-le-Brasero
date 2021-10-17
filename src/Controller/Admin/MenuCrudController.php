<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Menu::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('image', 'Image du menu')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(true)            
        ];
    }
}