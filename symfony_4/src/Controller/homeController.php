<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\UsuarioRepository;
use App\Entity\Usuario;

/**
 *  @Rest\Route("/inicio")
 */

class homeController extends AbstractFOSRestController
{
    /**
     *     @Rest\Get("/login")
     */

     public function login(Request $request){
         return $this->render("home.html.twig");
     }

    /**
     *     @Rest\Get("/usuarios")
     */

}


