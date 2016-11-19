<?php

include_once('Audi.php');
class AudiDecorator{
    
    protected $audi;
    protected $color;
    
    public function __construct (Audi $audi_in) {
        $this-> audi = $audi_in;
        $this->resetColor();
    }
    function resetColor(){
         $this->color = "!". $this->audi->getColor() . "!";
    }
    function showCar() {
        return $this-> color;
    }
    
}

?>