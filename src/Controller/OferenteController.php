<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OferenteController extends Controller
{
    /**
     * @Route("/servicio/zonas/oficios/oferente", name="oferente")
     */
    public function index()
    {
        return $this->render('/servicio/zonas/oficios/oferente/index.html.twig', [
            'controller_name' => 'OferenteController',
        ]);
    }
}
