<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OferenteController extends Controller
{
    /**
     * @Route("/zonas/servicios/oferente", name="oferente")
     */
    public function index()
    {
        return $this->render('/zonas/servicios/oferente/index.html.twig', [
            'controller_name' => 'OferenteController',
        ]);
    }
}
