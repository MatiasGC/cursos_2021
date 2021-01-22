<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcherInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 *  @Rest\Route("/inicio")
 */

 class homeController extends AbstractFOSRestController
 {
     /**
      *     @Rest\Get("/inicio1")
      */

      public function inicio(Request $request){
          return $this->render("base.html.twig", ["var" => "mostrar", "var2" => "variable2"]);
      }
 }

