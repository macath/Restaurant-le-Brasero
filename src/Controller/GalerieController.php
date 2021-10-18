<?php

namespace App\Controller;

use App\Repository\GaleryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GalerieController extends AbstractController
{
    /**
     * @Route("/galerie", name="galerie")
     */
    public function index(GaleryRepository $galerieRep): Response
    {
        $galerie = $galerieRep->findBy([],['id'=>'DESC']);

        return $this->render('galerie/index.html.twig',[
            'galerie'=>$galerie
        ]);
    }
}
