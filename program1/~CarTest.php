<?php


include_once('CarFactoryMethod.php');
include_once('AudiDecorator.php');
include_once('FordDecorator.php');
include_once('BMWDecorator.php');

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
echo "This is my program number 1";
echo " \n<br>";
echo "In this program I have used the Abstract Factory, Decorator, and Observer Design Pattern";
echo " \n<br>";
echo "I have used this program to display type of cars";
echo tagging("br").tagging("br");
echo 'testing CarFactoryMethod'.tagging("br");
$factoryInstance = new CarFactoryMethod;
TestFactory($factoryInstance);
echo tagging("br");
echo tagging("br"). tagging("br");
echo tagging("/body");
echo tagging("/html");

function TestFactory($factoryMethodInstance) 
{
    $viewUpdater = new ViewSubject();
    
    
	$test = $factoryMethodInstance->makeCar("Audi");
	echo 'Manufacturer: ' . $test -> getMan(). tagging("br");
	
	echo 'Year: ' . $test -> getYear(). tagging("br");
    
    echo 'Color: ' . $test -> getColor(). tagging ("br");
    
   	$decorator = new AudiDecorator($test);
	echo 'Decorated Color: ' . $decorator->showCar() . tagging("br") . tagging("br");
	
    $viewUpdater -> attach($test);
    $viewUpdater -> updateView($test->getColor(). "," . $test->getMan());

	$test = $factoryMethodInstance->makeCar("BMW");
	echo 'Manufacturer: ' . $test -> getMan(). tagging("br");
	
	echo 'Year: ' . $test -> getYear(). tagging("br");
    
    echo 'Color: ' . $test -> getColor(). tagging ("br");
    
   	$decorator = new BMWDecorator($test);
	echo 'Decorated Color: ' . $decorator->showCar() . tagging("br") . tagging("br");

    $test = $factoryMethodInstance->makeCar("Ford");
	echo 'Manufacturer: ' . $test -> getMan(). tagging("br");
	
	echo 'Year: ' . $test -> getYear(). tagging("br");
    
    echo 'Color: ' . $test -> getColor(). tagging ("br");
    
   	$decorator = new FordDecorator($test);
	echo 'Decorated Color: ' . $decorator->showCar() . tagging("br") . tagging("br");

	

}


function tagging($tag)

{
	return "<".$tag.">";
}



?>