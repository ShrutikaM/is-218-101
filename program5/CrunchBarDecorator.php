<?php

include_once('CrunchBar.php');
class CrunchBarDecorator{
    
    protected $crunchbar;
    protected $flavor;
    
    public function __construct (CrunchBar $crunchbar_in) {
        $this-> crunchbar = $crunchbar_in;
        $this->resetFlavor();
    }
    function resetFlavor(){
         $this->flavor = "***". $this->crunchbar->getFlavor() . "***";
    }
    function showCandy() {
        return $this-> flavor;
    }
    
}

?>