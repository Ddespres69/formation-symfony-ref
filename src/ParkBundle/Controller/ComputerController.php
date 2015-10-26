<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ComputerController extends Controller
{

    /**
     * @Route
     */
    public function listAction()
    {
        return $this->render('ParkBundle:Computer:list.html.twig', array(
                'computers' => $this->get('park.computer')->getComputersList()
            )
        );
    }

}
