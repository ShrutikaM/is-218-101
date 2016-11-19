<?php


  include_once('AbstractObserver.php');


  abstract class AbstractView {


    abstract function attach(AbstractObserver $observer_in);
    abstract function detach(AbstractObserver $observer_in);


    abstract function notify();


  }

?>