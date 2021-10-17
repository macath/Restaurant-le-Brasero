<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EleveurController extends AbstractController
{
    /**
     * @Route("/fournisseurs", name="eleveur")
     */
    public function index(): Response
    {
        return $this->render('eleveur/index.html.twig');
    }
}
