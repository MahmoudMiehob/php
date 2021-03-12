<?php



class appledivice {

    public $ram  ;
    public $inch ;
    public $space ;
    public $color ;
    public $ownername ;

    // *******************************

    const CHIP    = 'A9' ;
    const MINCHAR =  '5' ;
    const ownername = 5 ; 
 
    // ********************************

    public function setownername(){

        if(strlen($this->ownername) < self::ownername ){

            echo 'owner name cant be less than' . self::ownername .  'chars ' ;


        }
    }
}



$iphon6 =new appledivice ();


$iphon6 -> ram = '2GB' ;
$iphon6 -> inch = '5' ;
$iphon6-> space = '32GB' ;
$iphon6-> color = 'blue' ;
$iphon6-> ownername = 'osamas' ;

echo appledivice::ownername . "<br>";

echo $iphon6::ownername ;



$iphon6-> setownername();

?>