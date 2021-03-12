<?php


/*

$str = "I love php Too much Because php Is Good And Easy languages" ;

echo $str . "<br>" ;

$str2 = str_replace("php" , "java" , $str , $i);

echo $str2 . " <br> And replacement count is " . $i ;

*/



// ***********************************************************************

/*


$str = "I love php Too much Because php Is Good And Easy languages" ;

echo $str . "<br>" ;

$arr = explode(" " , $str);

echo "<pre>" ;

print_r($arr) ;

echo "<pre>" ;

// .............................................................

$arr2 = str_replace("php" , "java" , $arr );



echo "<pre>" ;

print_r($arr2) ;

echo "<pre>" ;

// ...............................................................

$str3 = implode(" @ " , $arr);


echo $str3 . "<br>" ;

*/



// *****************************************************************



/*

$str = "I love php Too much Because php Is Good And Easy languages" ;

echo $str . "<br>" ;

$str2 = str_replace(array("php" , "Is") , "--'replaced'--" , $str , $i);

echo $str2 ;
*/



// *****************************************************************



/*

$str = "I@love#php|Too#much@Because@php|Is#Good And Easy languages" ;

echo $str . "<br>" . "<br>" . "<br>" ;

$str2 = str_replace(array("#" , "@" , "|") , " " , $str);

echo $str2 ;

*/



// *****************************************************************


/*

$str = "I@love#php|Too#much@Because@php|Is#Good And Easy languages" ;

echo $str . "<br>" . "<br>" . "<br>" ;

$str2 = str_replace(array("#" , "@" , "|") , array("A" , "B" ,"C") , $str);

echo $str2 ;
*/


// *****************************************************************



/*

$str = "I@love#php|Too#much@Because@php|Is#Good And Easy languages" ;

echo $str . "<br>" . "<br>" . "<br>" ;

$str2 = str_replace(array("#" , "@" , "|") , array("A") , $str);

echo $str2 ;

*/


// ******************************************************************


/*

$str = "I@love#php|Too#much@Because@php|Is#Good And Easy languages" ;

echo $str . "<br>" . "<br>" . "<br>" ;

$str2 = str_replace(array("#" , "@" , "|") , array("A" , "B") , $str);

echo $str2 ;

*/
?>