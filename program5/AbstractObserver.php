<?php

 include_once('AbstractView.php');
  
  abstract class AbstractObserver {


    abstract function update(AbstractView $view_in);


  }

?>