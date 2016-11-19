<?php

include_once('AbstractView.php');
include_once('ViewObserver.php');


  class ViewSubject extends AbstractView {


    private $view = NULL;


    private $observers = array();


    function __construct() {
    }


    function attach(AbstractObserver $observer_in) {
      //could also use array_push($this->observers, $observer_in);
      $this->observers[] = $observer_in;
    }


    function detach(AbstractObserver $observer_in) {
      //$key = array_search($this->observers, $observer_in);
      foreach($this->observers as $okey => $oval) {
        if ($oval == $observer_in) { 
          unset($this->observers[$okey]);
        }
      }
    }


    function notify() {
      foreach($this->observers as $obs) {
        $obs->update($this);
      }
    }


    function updateView($newView) {
      $this->view = $newView;
      $this->notify();
    }


    function getView() {
      return $this->view;
    }
 }

?>