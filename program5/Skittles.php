<?php

include_once ('AbstractCandy.php');
include_once ('ViewSubject.php');


class Skittles extends AbstractCandy {
  private $company;
    private $flavor;
    
    
    function __construct() {
        $this->company = 'Skittles';
        $this->flavor = 'lime';
        
        
    }
    function getCompany() {return $this-> company;}
    function getFlavor() {return $this-> flavor;}
    
    public function update(AbstractView $view)
    {
      
      
          
    }
}

?>