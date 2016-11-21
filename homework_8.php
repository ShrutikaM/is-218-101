<?php
echo " SHRUTIKA MADDA \n";
echo " \n<br>";
echo " Homework 8 \n";
echo " \n<br>";
echo " \n<br>";
echo " Assigning Reference \n";
echo " \n<br>";
$myVar = "Hi there";
$anotherVar = $myVar;
$anotherVar = "See you later";
echo $myVar; 
echo $anotherVar; 

echo " \n<br>";
echo " \n<br>";
echo " Removing Reference \n";
echo " \n<br>";
$myVar = "Hi there";
$anotherVar =& $myVar;
$anotherVar = "See you later";
unset( $anotherVar );
echo $myVar; 

echo " \n<br>";
echo " \n<br>";
echo " Passing Reference \n";
echo " \n<br>";
function goodbye( &$greeting ) {
  $greeting = "See you later";
}
 
$myVar = "Hi there";
goodbye( $myVar );
echo $myVar; 

echo " \n<br>";
echo " \n<br>";
echo " Returning Reference \n";
echo " \n<br>";
$numWidgets = 10;
 
function &getNumWidgets() {
  global $numWidgets;
  return $numWidgets;
}
 
$numWidgetsRef =& getNumWidgets();
$numWidgetsRef--;
echo "\$numWidgets = $numWidgets<br>";  
echo "\$numWidgetsRef = $numWidgetsRef<br>";  

echo " \n<br>";
echo " \n<br>";
echo " For-Loop Reference \n";
echo " \n<br>";
$bands = array( "The Who", "The Beatles", "The Rolling Stones" );
 
foreach ( $bands as $band ) {
  $band = strtoupper( $band );
}
 
echo "<pre>";
print_r( $bands );
echo "</pre>";
?>