<?php

echo " SHRUTIKA MADDA \n";
echo " \n<br>";
echo " \n<br>";
echo " Example of Isset \n";
echo " \n<br>"; 
$a = array ('Car' => 1, 'hello' => NULL, 'elephant' => array('a' => 'apple'));
var_dump(isset($a['Car']));            
var_dump(isset($a['foo']));             
var_dump(isset($a['hello']));           
var_dump(array_key_exists('hello', $a)); 
var_dump(isset($a['elephant']['a']));        
var_dump(isset($a['elephant']['b']));        
var_dump(isset($a['cake']['a']['b']));  

echo " \n<br>"; 
echo " \n<br>"; 
echo " Example of Empty \n";
echo " \n<br>"; 

$var = 0;
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all';
}

if (isset($var)) {
    echo '$var is set even though it is empty';
}
echo " \n<br>";
echo " \n<br>";
echo " Example of Switch \n";
echo " \n<br>";


$favcolor = "BMW";

switch ($favcolor) {
    case "BMW":
        echo "Your car is BMW!";
        break;
    case "Audi":
        echo "Your car is Audi!";
        break;
    case "Ford":
        echo "Your car is Ford!";
        break;
    default:
        echo "Your car is neither BMW, Audi, Ford!";
}


?>