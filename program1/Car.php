<?php

include_once ('AbstractCar.php');

class Car extends AbstractCar {
    private $manu;
    
    function __construct() {
        $this->manu = 'Audi';
    }
    function getMan() {return $this-> manu;}
    
}

?>