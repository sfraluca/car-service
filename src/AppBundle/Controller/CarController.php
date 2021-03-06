<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Car;
use AppBundle\Entity\CarService;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CarController extends Controller
{
    /**
     * @Route("/car/", name="back")
     */
    public function productAction(Request $request) {
        // replace this example code with whatever you need
        $car = $this->getDoctrine()
                ->getRepository('AppBundle:Car')
                ->findAll();

        return $this->render('default/car.html.twig', array('Car' => $car));
    }
        /**
     * @Route("/car/add")
     */
        public function addServiceAction(Request $request)
    {
        $car = new Car();
        $car->setPlateNumber('Write a plate number');
        $car->setBrand('Write a price');
        $car->setModel('Write a model');
        $car->setYear('Write an year');
        $car->setColor('Write a color');
        $car->setType('Write a type');
       

        $form = $this->createFormBuilder($car)
            ->add('plateNumber', TextType::class)
            ->add('brand', TextType::class)
            ->add('model', TextType::class)
            ->add('year', TextType::class)
            ->add('color', TextType::class)
            ->add('type', TextType::class)
            ->add('Submit', SubmitType::class, array('label' => 'Add Car'))
            ->getForm();
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
        $plateNumber=$form['plateNumber']->getData();
        $brand=$form['brand']->getData();
        $model=$form['model']->getData();
        $year=$form['year']->getData();
        $color=$form['color']->getData();
        $type=$form['type']->getData();
        
        $car->setPlateNumber($plateNumber);
        $car->setBrand($brand);
        $car->setModel($model);
        $car->setYear($year);
        $car->setColor($color);
        $car->setType($type);
        
        $em=$this->getDoctrine()->getManager();
        $em->persist($car);
        $em->flush();
        
        }
        
        return $this->render('default/addcar.html.twig', array(
            'form' => $form->createView(),
        ));

        
    }
      

}