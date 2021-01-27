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
      *     @Rest\Get("/inicio1")
      */

      public function inicio(Request $request){

        //Tengo el Entity Manager
        $em = $this->getDoctrine()->getManager();

        $usuarios = $em->getRepository(Usuario::class)->findAll();

        #$repositorio = $this->getDoctrine()->getRepository(Usuario::class); 

        dd($usuarios);


          return $this->render("base.html.twig", ["var" => $usuarios, "var2" => "variable2"]);
      }

     /**
      *     @Rest\Get("/usuarios")
      */

      public function usuarios(Request $request){
        return $this->render("listaUsuarios.html.twig", ["var" => "mostrar", "var2" => "variable2"]);
    }

     /**
      *     @Rest\Get("/articulos")
      */

      public function articulos(Request $request){
        return $this->render("listaArticulos.html.twig", ["var" => "mostrar", "var2" => "variable2"]);
    }
 }



