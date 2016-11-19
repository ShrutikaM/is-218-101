<?php


include_once('CandyFactoryMethod.php');
include_once('JollyRancherDecorator.php');
include_once('CrunchBarDecorator.php');
include_once('SkittlesDecorator.php');
echo tagging("html");
echo tagging("head");
echo tagging("/head");
echo tagging("body");
echo "Shrutika Madda";
echo " \n<br>";
echo "IS 218 Section 101";
echo " \n<br>";
echo "Design Pattern Project 1";
echo " \n<br>";
echo "The purpose of this assignment was to create 5 mini programs that use three design patterns";
echo " \n<br>";
echo "This is my program number 5";
echo " \n<br>";
echo "In this program I have used the Decorator , Factory, and Observer Design Patterns";
echo " \n<br>";
echo tagging("br").tagging("br");
echo 'CandyFactoryMethod'.tagging("br");
$factoryInstance = new CandyFactoryMethod;
TestFactory($factoryInstance);
echo tagging("br");

echo tagging("br"). tagging("br");
echo tagging("/body");
echo tagging("/html");

function TestFactory($factoryMethodInstance) 
{
    $viewUpdater = new ViewSubject();
    
    
	$test = $factoryMethodInstance->makeCandy("JollyRancher");
	echo 'Company: ' . $test -> getCompany(). tagging("br");
	
	echo 'Flavor: ' . $test -> getFlavor(). tagging("br");
    
    
    
   	$decorator = new JollyRancherDecorator($test);
	echo 'Decorated Flavor: ' . $decorator->showCandy() . tagging("br") . tagging("br");
	
    $viewUpdater -> attach($test);
    $viewUpdater -> updateView($test->getFlavor(). "," . $test->getCompany());
    
    echo " \n<br>";
    echo " \n<br>";

	$test = $factoryMethodInstance->makeCandy("CrunchBar");
	echo 'Company: ' . $test -> getCompany(). tagging("br");
	
	echo 'Flavor: ' . $test -> getFlavor(). tagging("br");
    
   	$decorator = new CrunchBarDecorator($test);
	echo 'Decorated Flavor: ' . $decorator->showCandy() . tagging("br") . tagging("br");
    $viewUpdater -> attach($test);
    $viewUpdater -> updateView($test->getFlavor(). "," . $test->getCompany());
    
    echo " \n<br>";
    echo " \n<br>";

    $test = $factoryMethodInstance->makeCandy("Skittles");
	echo 'Company: ' . $test -> getCompany(). tagging("br");
	
	echo 'Flavor: ' . $test -> getFlavor(). tagging("br");
    
   	$decorator = new SkittlesDecorator($test);
	echo 'Decorated Flavor: ' . $decorator->showCandy() . tagging("br") . tagging("br");
    $viewUpdater -> attach($test);
    $viewUpdater -> updateView($test->getFlavor(). "," . $test->getCompany());

}


function tagging($tag)

{
	return "<".$tag.">";
}



?>