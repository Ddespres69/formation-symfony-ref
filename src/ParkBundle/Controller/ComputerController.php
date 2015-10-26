<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ComputerController extends Controller
{

    /**
     *  @Route("/computer/list")
     *
     */
    public function listAction()
    {
        return $this->render('ParkBundle:Computer:list.html.twig', array(
                'computers' => $this->get('park.computer')->getComputersList() 
            )
        );
    }

}
