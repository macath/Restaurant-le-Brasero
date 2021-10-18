<?php

namespace App\Controller;

use App\Repository\SuppliersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EleveurController extends AbstractController
{
    /**
     * @Route("/fournisseurs", name="eleveur")
     */
    public function index(SuppliersRepository $eleveursRep): Response
    {
        $suppliers = $eleveursRep->findBy([],['id'=>'DESC']);

        return $this->render('eleveur/index.html.twig',[
            'suppliers'=>$suppliers
        ]);
    }
}
