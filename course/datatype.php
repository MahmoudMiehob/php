<?php


// string

$var = "i love php";
$var2 = 3;
$var3 = True ;
$var4 = 10.5 ;
$var5 = array (
    "A" => "Val1" ,

    "B" => "val2" ,

    "c" => "val3" ,
) ;
$var6 = null ;



echo "<h2> get type </h2>";

echo gettype($var) . "<br/>";
echo gettype($var2) . "<br/>";
echo gettype($var3) . "<br/>";
echo gettype($var4) . "<br/>";
echo gettype($var5) . "<br/>";
echo gettype($var6) . "<br/>";



echo "<h2> variable dump </h2>";

var_dump($var); echo "<br/>";
var_dump($var2); echo "<br/>";
var_dump($var3); echo "<br/>";
var_dump($var4); echo "<br/>";
var_dump($var5); echo "<br/>";
var_dump($var6); echo "<br/>";

?>