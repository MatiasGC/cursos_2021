<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\UsuarioRepository;
use App\Repository\ProductoRepository;
use App\Entity\Usuario;
use App\Entity\Producto;

/**
 *  @Rest\Route("/inicio")
 */

 class pruebaController extends AbstractFOSRestController
 {
     /**
      *     @Rest\Get("/inicio1")
      */

      public function inicio(Request $request){

        //Acceso a los datos
/*         $em = $this->getDoctrine()->getManager(); */
/*         $usuarios = $em->getRepository(Usuario::class)->findAll();
        $repositorio = $this->getDoctrine()->getRepository(Usuario::class);  */

/*         $producto = $em->getRepository(Producto::class)->findProductByName("Azucar");

        dd($producto); */

        //Persistencia de datos
/*         $usuario = new Usuario(
            'Pedro',
            'Gomez',
            'pedro@gmail.com',
            '123456'
        ); */

       // $valor = $em->persist($usuario); //Da de alta los datos en la BD
        //$em->flush(); //Termina de asentar los datos.


          /* return $this->render("base.html.twig", ["var" => $usuarios, "var2" => "variable2"]); */
          return $this->render("base.html.twig", ["var" => "mostrar", "var2" => "variable2"]);
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



