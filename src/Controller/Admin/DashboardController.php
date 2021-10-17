<?php

namespace App\Controller\Admin;

use App\Entity\Menu;
use App\Entity\Galery;
use App\Entity\DayMenu;
use App\Entity\Actuality;
use App\Entity\Suppliers;
use Symfony\Component\HttpFoundation\Response;
use App\Controller\Admin\DayMenuCrudController;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/administrateur", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(DayMenuCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Espace administrateur <br> Le Braséro');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Accueil', 'fa fa-home');
        yield MenuItem::linkToCrud('Menu du jour', 'fa fa-calendar-day', DayMenu::class);
        yield MenuItem::linkToCrud('Actualitées', 'fas fa-newspaper', Actuality::class);
        yield MenuItem::linkToCrud('Galerie', 'fas fa-images', Galery::class);
        yield MenuItem::linkToCrud('Menu du restaurant', 'fas fa-clipboard-list', Menu::class);
        yield MenuItem::linkToCrud('Fournisseurs', 'fas fa-tractor', Suppliers::class);
    }
}
