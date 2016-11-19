<?php

include_once ('AbstractCandy.php');
include_once ('ViewSubject.php');


class CrunchBar extends AbstractCandy {
  private $company;
    private $flavor;
    
    
    function __construct() {
        $this->company = 'CrunchBar';
        $this->flavor = 'chocolate';
        
        
    }
    function getCompany() {return $this-> company;}
    function getFlavor() {return $this-> flavor;}
    
    public function update(AbstractView $view)
    {
      
      
          
    }
}

?>