<?php

namespace App\Controller\Admin;

use App\Entity\Actuality;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ActualityCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Actuality::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('titre', 'Titre de l\'actualité'),
            TextField::new('date', 'Date'),
            TextField::new('texte', 'Texte'),
            ImageField::new('image', 'Image')
            ->setBasePath('uploads/')
            ->setUploadDir('public/uploads')
            ->setUploadedFileNamePattern('[randomhash].[extension]')
            ->setRequired(true)
        ];
    }
}