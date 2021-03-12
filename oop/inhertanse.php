<?php

class appledivice {

    public $ram  ;
    public $inch ;
    public $space ;
    public $color ;



    public function change ($r , $i , $s , $c ){

        $this->ram   = $r ;
        $this->inch  = $i ;
        $this->space = $s ;
        $this->color = $c ;

    }

}

class sony extends appledivice {


    public $camera ="25mb" ;

}


$iphon6 =new appledivice ();

$iphon6 -> change("3GB", "6" , "64" , "black");

echo "<pre>" ;

print_r($iphon6) ;

echo "<pre>" ;


$sony =new sony ();

$sony -> change("3GB", "6" , "64" , "black");

echo "<pre>" ;

print_r($sony) ;

echo "<pre>" ;

?>