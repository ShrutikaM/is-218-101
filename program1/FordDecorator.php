<?php

include_once('Ford.php');
class FordDecorator{
    
    protected $ford;
    protected $color;
    
    public function __construct (Ford $ford_in) {
        $this-> ford = $ford_in;
        $this->resetColor();
    }
    function resetColor(){
        $this->color = "!". $this->ford->getColor() . "!";
    }
    function showCar() {
        return $this-> color;
    }
    
}

?>