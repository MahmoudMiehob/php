<?php

/*
$file = fopen("Ahmed.txt", "r" ) ;      //نمط قديم يظهر المسار وهذا الشي يشكل خطر 


$file = @fopen("Ahmed.txt", "r" ) ;      // باستخدام ال @ يخفي ال ثققخق نهائيا


$file = @fopen("Ahmed.txt", "r" ) or die("...."); // كتابة ال error المناسب

*/
// *************************************************************************************



//مثال عن التضمين 

// (@include("include.php")) or die("this file is not fond");



// *************************************************************************************


/*
$server = "localhost" ;
$user  = "mahmoud"   ;
$pass   = "hello php" ;
$db     = "ourgatabase" ;

@(mysqli_connect($server,$user,$pass,$db)) or die("this is error");

*/


?>