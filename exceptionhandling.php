<?php

echo " SHRUTIKA MADDA \n";
echo " \n<br>";
echo " Homework 9 \n";
echo " \n<br>";
echo " Exception Handling \n";
echo " \n<br>";
echo " \n<br>";
   function exception_handler($exception) {
      echo "Uncaught exception: " , $exception->getMessage(), "\n";
   }
	
   set_exception_handler('exception_handler');
   throw new Exception('Uncaught Exception');
   
   echo "Not Executed\n";
?>