<?php



/*

$name = 'osama' ;

mkdir($name) ;

echo $name ;

rmdir($name) ;
*/


// ********************************************************




$name = "osama" ;

if (is_dir($name)){

    rmdir($name);
    echo "the directory is deleted";

}else{

    echo "there is not found" ; 
}


?>