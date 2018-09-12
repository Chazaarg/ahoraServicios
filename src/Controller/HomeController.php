<?php

namespace App\Controller;

use App\Entity\Zona;
use App\Entity\Servicio;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index", options={"expose"=true})
     */
    public function index(Request $request)
    {
        if ($request->isXmlHttpRequest()){

            $zonaIngresada = $request->request->get('zonaIngresada');
            $direccionIngresada = $request->request->get('direccionIngresada');
            
            $arrData = ['zona' => $zonaIngresada, 'direccion' => $direccionIngresada];
            return new JsonResponse($arrData);
        }


        $zonas = $this->getDoctrine()
        ->getRepository(Zona::class)
        ->findAll();

        $servicio = $this->getDoctrine()
        ->getRepository(Servicio::class)
        ->findAll();
        
        return $this->render('index.html.twig', [
            'controller_name' => 'Home',
            'servicios' => $servicio,
            'zonas' => $zonas,
        ]);
    }

}
