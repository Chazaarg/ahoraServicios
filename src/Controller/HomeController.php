<?php

namespace App\Controller;

use App\Entity\Servicio;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $servicio = $this->getDoctrine()
        ->getRepository(Servicio::class)
        ->findAll();
        
        return $this->render('index.html.twig', [
            'controller_name' => 'Home',
            'servicios' => $servicio,
        ]);
    }

}
