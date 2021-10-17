<?php

namespace App\Controller\Admin;

use App\Entity\DayMenu;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
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
            MoneyField::new('prix')->setCurrency('EUR'),
            TextField::new('entree', 'Entrée du jour'),
            TextField::new('plat', 'Plat du jour'),
            TextField::new('dessert', 'Dessert du jour')            
        ];
    }
}