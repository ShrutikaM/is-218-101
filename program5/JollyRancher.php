<?php

include_once ('ViewSubject.php');
include_once ('AbstractCandy.php');

class JollyRancher extends AbstractCandy {
    
    private $company;
    private $flavor;
    
    
    function __construct() {
        $this->company = 'JollyRancher';
        $this->flavor = 'cherry';
        
        
    }
    function getCompany() {return $this-> company;}
    function getFlavor() {return $this-> flavor;}
    
    
    public function update(AbstractView $view)
    {
      echo '*The observer parameter passed*'.BR;
      echo ' new favorite patterns: '.$view->getView().BR;
          
    }
    
}

?>