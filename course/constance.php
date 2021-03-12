<?php

/*
  syntax : define(name, value, case-instnstive);
  By default false
*/


$firstname = "mahmoud";
echo "$firstname <br> " ;


define("FIRST_NAME", "mahmoud", true );
echo FIrST_NAME ; //contant


echo "<br>" ;


define("LAST_NAME", "mahmoud");
echo LAST_NAME ; //constant

echo "<br>" ;

echo PHP_INT_MAX ;


echo "<br>" ;


echo __file__ ;


echo "<br>" ;


echo __DIR__ ;

echo "<br>" ;

echo __line__ ;
/*
echo "<br>" ;


$firstname = "hasan";
echo "$firstname <br> " ;

echo "<br>" ;

define("FIRST_NAME", "ali", true );
echo FIrST_NAME ;

*/
;?>