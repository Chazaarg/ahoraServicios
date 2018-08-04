<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiciosController extends Controller
{
    /**
     * @Route("/zonas/servicios", name="servicios")
     */
    public function index()
    {
        return $this->render('zonas/servicios/index.html.twig', [
            'controller_name' => 'ServiciosController',
        ]);
    }
}
