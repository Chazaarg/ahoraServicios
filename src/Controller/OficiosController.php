<?php

namespace App\Controller;

use App\Entity\Oficio;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class OficiosController extends AbstractController
{
    /**
     * @Route("Servicio_{servicio}/{nombre}", name="oficio_index")
     */
    public function oficios(Oficio $oficio)
    {


        return $this->render('servicio/oficios/index.html.twig', [
            'controller_name' => $oficio->getNombre(),
            
        ]);
    }
}
