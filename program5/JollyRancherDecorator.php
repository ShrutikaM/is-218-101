<?php

include_once('JollyRancher.php');
class JollyRancherDecorator{
    
    protected $jollyrancher;
    protected $flavor;
    
    public function __construct (JollyRancher $jollyrancher_in) {
        $this-> jollyrancher = $jollyrancher_in;
        $this->resetFlavor();
    }
    function resetFlavor(){
         $this->flavor = "***". $this->jollyrancher->getFlavor() . "***";
    }
    function showCandy() {
        return $this-> flavor;
    }
    
}

?>