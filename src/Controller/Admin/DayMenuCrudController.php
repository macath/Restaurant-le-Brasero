<?php

namespace App\Controller\Admin;

use App\Entity\DayMenu;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DayMenuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DayMenu::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            MoneyField::new('prix')->setCurrency('EUR'),
            TextField::new('subtitle1', 'Sous-Titre 1'),
            TextField::new('entree', 'Entrée du jour'),
            TextField::new('subtitle2', 'Sous-Titre 2'),
            TextField::new('plat', 'Plat du jour'),
            TextField::new('subtitle3', 'Sous-Titre 3'),
            TextField::new('dessert', 'Dessert du jour'),
            ImageField::new('image', 'Image')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),        
        ];
    }
}