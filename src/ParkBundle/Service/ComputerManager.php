<?php

namespace ParkBundle\Service;


class ComputerManager
{
    public function getComputersList()
    {
        $computers = array();
        array_push($computers, array('id' => 1, 'name' => 'ordinateur 1', 'ip' => '10.69.172.53', 'enabled' => true));
        array_push($computers, array('id' => 2, 'name' => 'ordinateur 2', 'ip' => '10.69.172.54', 'enabled' => false));


        return $computers;

    }

}
