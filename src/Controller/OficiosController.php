<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OficiosController extends Controller
{
    /**
     * @Route("/servicio/zonas/oficios", name="oficios")
     */
    public function index()
    {
        return $this->render('/servicio/zonas/oficios/index.html.twig', [
            'controller_name' => 'OficiosController',
        ]);
    }
}
