<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CarController extends Controller
{
    /**
     * @Route("/car/")
     */
    public function productAction(Request $request) {
        // replace this example code with whatever you need
        $car = $this->getDoctrine()
                ->getRepository('AppBundle:Car')
                ->findAll();

        return $this->render('default/car.html.twig', array('Car' => $car));
    }

}