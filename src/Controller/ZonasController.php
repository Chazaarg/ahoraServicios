<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ZonasController extends Controller
{
    /**
     * @Route("/zonas", name="zonas")
     */
    public function index()
    {
        return $this->render('zonas/index.html.twig', [
            'controller_name' => 'ZonasController',
        ]);
    }
}
