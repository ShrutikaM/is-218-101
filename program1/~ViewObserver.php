<?php

 include_once('AbstractObserver.php');
 include_once('ViewSubject.php');
  define('BR', '<'.'BR'.'>');


  class ViewObserver extends AbstractObserver {


    public function __construct() {
    }


    public function update(AbstractView $subject) {
      echo BR.BR;
      echo '*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*'.BR;
      echo ' new favorite patterns: '.$subject->getFavorites().BR;
      echo '*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*'.BR;      
    }


  }

?>