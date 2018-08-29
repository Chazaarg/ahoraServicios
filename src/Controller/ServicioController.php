<?php

namespace App\Controller;

use App\Entity\Servicio;
use App\Entity\Zona;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/** 
 * @Route("/servicio_{nombre}")
*/
class ServicioController extends Controller
{
    /**
     * @Route("/", name="servicio_index", methods="GET")
     */
    public function index(Servicio $servicio): Response
    {
        $zonas = $this->getDoctrine()
        ->getRepository(Zona::class)
        ->findAll();

        return $this->render('servicio/index.html.twig', [
            'controller_name' => $servicio->getNombre(),
            'zonas' => $zonas,

            ]);
    }
}
