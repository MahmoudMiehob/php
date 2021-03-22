<?php


/*

class iphone {


    public $name ;
    public $ram  ;

    public function sayhello (){

        echo "hello user" ;
    }

    public function __construct (){


        echo "object is creted " ;
    }


}


$phone = new iphone() ;

echo '<pre>'    ;
print_r($phone) ;
echo '<pre>'    ;

*/



// *****************************************************************

/*

class iphone {


    public $name ;
    public $ram  ;

    public function __construct ($n , $r){
 

        $this->name = $n   ;
        $this->ram = $r    ;

        echo "hello " . $n ;
    }


}


$phone = new iphone('osama' , 6) ;

echo '<pre>'    ;
print_r($phone) ;
echo '<pre>'    ;

*/


// *************************************************************************


/*

class iphone {


    public $name ;
    public $ram  ;


    public function __call($method , $params){

        echo "the method " . $method . " not found or not accessable <br> " ;


    } 

}


$phone = new iphone() ;
$phone->sayhello()    ;
$phone->sayhello()    ;

echo '<pre>'    ;
print_r($phone) ;
echo '<pre>'    ;

*/

// **********************************************************************

/*

class iphone {


    public $name   ;
    public $ram    ;
    private $color ;

    public function __get ($p){

        echo " the property " . $p . " is not found <br>" ;


    }


}


$phone = new iphone()   ;
echo $phone->color =red ;


echo '<pre>'    ;
print_r($phone) ;
echo '<pre>'    ;

*/

// **************************************************************************


/*

class iphone {


    public $name ;
    public $email ;


    public function __construct($n ,$e){
 
        $this->name = $n  ;
        $this->email = $e ;

    }

}




$main = new iphone("osama" , "o@o.com") ;
$copy = $main ;

$main->name = 'sayed';
$copy->name = 'Ali'  ;

echo '<pre>'   ;
print_r($main) ;
echo '<pre>'   ;


echo '<pre>'   ;
print_r($copy) ;
echo '<pre>'   ;

*/

// ***********************************************************************


/*

class iphone {


    public $name  ;
    public $email ;


    public function __construct($n ,$e){
 
        $this->name = $n  ;
        $this->email = $e ;

    }

}




$main = new iphone("osama" , "o@o.com") ;
$copy = clone $main  ;

$main->name = 'sayed';
$copy->name = 'Ali'  ;

echo '<pre>'   ;
print_r($main) ;
echo '<pre>'   ;


echo '<pre>'   ;
print_r($copy) ;
echo '<pre>'   ;

*/

// *************************************************************
?>