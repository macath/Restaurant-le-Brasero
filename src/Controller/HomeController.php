<?php

namespace App\Controller;

use App\Repository\DayMenuRepository;
use App\Repository\ActualityRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(DayMenuRepository $dayMenuRep, ActualityRepository $actuRep): Response
    {
        $dayMenu = $dayMenuRep->findAll();
        $actu = $actuRep->findBy([],['id'=>'DESC'],5);

        return $this->render('home/index.html.twig',[
            'dayMenu'=>$dayMenu,
            'actu'=>$actu
        ]);
    }
}
