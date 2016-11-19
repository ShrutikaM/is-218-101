<?php

include_once('Skittles.php');
class SkittlesDecorator{
    
    protected $skittles;
    protected $flavor;
    
    public function __construct (Skittles $skittles_in) {
        $this-> skittles = $skittles_in;
        $this->resetFlavor();
    }
    function resetFlavor(){
         $this->flavor = "***". $this->skittles->getFlavor() . "***";
    }
    function showCandy() {
        return $this-> flavor;
    }
    
}

?>