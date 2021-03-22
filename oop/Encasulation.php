<?php



class appledivice {

    public $ram  ;
    public $inch ;
    public $space ;
    public $color ;
    private $lock ;


    // method  ....

    
    public function change ($r , $i , $s , $c ){

        $this->ram   = $r ;
        $this->inch  = $i ;
        $this->space = $s ;
        $this->color = $c ;

    }

    public function changelock ($lo) {

        $this->lock  = sha1($lo) ;
    }
}



$iphon6 =new appledivice ();


$iphon6 -> ram = '2GB' ;
$iphon6 -> inch = '5' ;
$iphon6-> space = '32GB' ;
$iphon6-> color = 'blue' ;
$iphon6-> changelock ('mahmoud@1234') ;
//$iphon6-> lock = 'mahmoud' ;





echo '<pre>';

var_dump($iphon6) ;

echo '<pre>' ;





$iphon6plus =new appledivice ();


$iphon6plus -> ram = '4GB' ;
$iphon6plus -> inch = '6' ;
$iphon6plus -> space = '64GB' ;
$iphon6plus -> color = 'black' ;
$iphon6plus -> change("6GB", "8" , "128" , "blue");


echo '<pre>';

var_dump($iphon6plus) ;

echo '<pre>' ;





?>
