<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CarController extends Controller
{
    /**
     * @Route("/car/")
     */
    
   public function contactAction(){
     return $this->render('default/car.html.twig');
   }

}