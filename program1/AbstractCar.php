<?php
include_once('AbstractObserver.php');
abstract class AbstractCar extends AbstractObserver{
   
    abstract function getMan();
    abstract function getYear();
    abstract function getColor();
    
    
    
}


?>