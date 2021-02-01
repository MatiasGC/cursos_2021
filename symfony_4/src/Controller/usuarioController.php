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

class usuarioController extends AbstractFOSRestController
{
    /**
     *     @Rest\Post("/login_check")
     */
     public function login(Request $request){

        $em = $this->getDoctrine()->getManager();
        $mail = $_POST["email"];
        $password = $_POST["pass"];
        $usuario = $em->getRepository(Usuario::class)->findUserByEmail($mail);

        if(!empty($usuario)){
            $p = $em->getRepository(Usuario::class)->findUserByPass($password);
            if(!empty($p)){
                return $this->render("login_success.html.twig");
            }
            else{
                return $this->render("login_error.html.twig");
            }
        }else{
            return $this->render("login_error.html.twig");
        }
        
     }

    /**
     *     @Rest\Get("/usuarios")
     */

}