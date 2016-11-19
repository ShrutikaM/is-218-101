<?php

include_once ('AbsttractCarFactory.php');

include_once('Audi.php');

class AudiFactory extends AbstractCarFactory {
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