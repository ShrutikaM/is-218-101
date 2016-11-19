<?php

include_once ('AbstractCandyFactory.php');

include_once('JollyRancher.php');
include_once ('CrunchBar.php');
include_once ('Skittles.php');

class CandyFactoryMethod extends AbstractCandyFactory {
    private $context = "Shrutika Madda";
    
    function makeCandy($param) {
        $candy = null;
        switch ($param) {
            case "JollyRancher":
                $candy = new JollyRancher;
                break;
            case "CrunchBar":
                $candy = new CrunchBar;
                break;
            case "Skittles":
                $candy = new Skittles;
                break;
        }
        return $candy;
    }
}

?>