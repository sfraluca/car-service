<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Car;
use AppBundle\Entity\CarService;

class CarServiceController extends Controller
{
    /**
     * @Route("/car/service/")
     */
 

   public function showAction(Request $request) {

        $carPlateNumber = $request->query->get('nr', 'BH12NGT');

        $carServices = $this->getDoctrine()
                ->getRepository('AppBundle:CarService')
             ->findAllServicesByCarPlateNumber($carPlateNumber);
        return $this->render('default/carservice.html.twig', array('viewServices' => $carServices));


//        $car = $this->getDoctrine()
//                ->getRepository('AppBundle:Car')
//                ->findOneByPlateNumber($carPlateNumber);
//        $carServices = $car->getCarServices();       
//           $carServices = $this->getDoctrine()
//                ->getRepository('AppBundle:CarService')
//             ->findByCar($car);
  //   dump($carServices);
    // exit;
 //     $car = $car_serviceId->getCarService();
  //   return new Response(
  //          '<html><body> Service id: '
    //          . ''.$car_service->getId().'<br> Title: '
       //       . ''.$car_service->getTitle().'<br> Price '
         //     . ''.$car_service->getPrice().'<br> Description: '
           //   . ''.$car_service->getDescription().'<br> Service date'
           //   . ''.$car_service->getServiceDate().'<br>'
           //   . ' belongs to: '
            //  . ''.$car->getPlateNumber().'</body></html>'
        //);
    }
}

