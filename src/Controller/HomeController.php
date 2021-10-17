<?php

namespace App\Controller;

use App\Repository\DayMenuRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(DayMenuRepository $DayMenuRep): Response
    {
        $dayMenu = $DayMenuRep->findAll();

        return $this->render('home/index.html.twig',[
            'dayMenu'=>$dayMenu
        ]);
    }
}
