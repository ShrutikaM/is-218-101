<?php

include_once ('AbstractCarFactory.php');

include_once('Audi.php');
include_once ('BMW.php');
include_once ('Ford.php');

class CarFactoryMethod extends AbstractCarFactory {
    private $context = "Shrutika Madda";
    
    function makeCar($param) {
        $car = null;
        switch ($param) {
            case "Audi":
                $car = new Audi;
                break;
            case "BMW":
                $car = new BMW;
                break;
            case "Ford":
                $car= new Ford;
                break;
        }
        return $car;
    }
}

?>