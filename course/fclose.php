<?php
/*
$handle = fopen('osama.txt', 'a+');

echo fread($handle, 6);

fclose($handle) ;
*/


// **********************************************************


$filehandel = file_get_contents("https://mmite.000webhostapp.com/");

echo "<pre>" ;

print_r($filehandel) ;

echo"<pre>" ;


?>