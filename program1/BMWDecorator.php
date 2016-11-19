<?php

include_once('BMW.php');
class BMWDecorator{
    
    protected $bmw;
    protected $color;
    
    public function __construct (BMW $bmw_in) {
        $this-> bmw = $bmw_in;
        $this->resetColor();
    }
    function resetColor(){
         $this->color = "!". $this->bmw->getColor() . "!";
    }
    function showCar() {
        return $this-> color;
    }
    
}

?>