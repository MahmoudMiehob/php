<?php


interface mobile {

    public function presshome() ;
}

class iphone implements mobile {


    public $name ; 

    public function presshome(){

        echo "yes" ;
        
        
    }
}


class sony implements mobile {


    public $name ; 

    public function presshome(){

        echo "no" ;
        
        
    }
}



$iphone = new iphone () ;
$iphone -> presshome() ;
echo "<pre>" ;
print_r($iphone) ;
echo "<pre>" ;



$sony = new sony () ;
$sony -> presshome() ;
echo "<pre>" ;
print_r($sony) ;
echo "<pre>" ;
?>