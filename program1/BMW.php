<?php

include_once ('AbstractCar.php');
include_once ('ViewSubject.php');


class BMW extends AbstractCar {
    private $manu;
    private $year;
    private $color;
    
    function __construct() {
        $this->manu = 'BMW';
        $this->year = '1996';
        $this->color = 'Blue';
    }
    function getMan() {return $this-> manu;}
      function getYear() {return $this-> year;}
    function getColor() {return $this-> color;}
    public function update(AbstractView $view)
    {
      echo '*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*'.BR;
      echo ' new favorite patterns: '.$view->getView().BR;
      echo '*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*'.BR;      
    }
}

?>