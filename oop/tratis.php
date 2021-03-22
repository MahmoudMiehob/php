<?php


/*

class iphone {

    public $feature1 ;
    public $feature2 ;

}
class sony {

    public $feature3 ;
    public $feature4 ;

}
class nokia {

    public $feature5 ;
    public $feature6 ;

}
class newphone extends iphone {


}

$phone = new newphone () ;

echo '<pre>' ;
print_r($phone);
echo '<pre>' ;


*/

// ***************************************************************

/*

trait fingerprint {

    public function fingerprint(){
        echo ' this is finger print ' ;
    }
}

trait threedmax {

    public function threedmax(){
        echo ' this is threedmax feature ' ;       
    }
}


trait facefeature {

    public function facefeature(){
        echo ' this is facefeature ' ;   
    }
}

class iphone {
    use facefeature;
    use fingerprint;
    use threedmax;

    function sayhello (){

        echo " hello from iphone " ;
    }
}



class sony {
    use facefeature;
    use fingerprint;
    function sayhello (){

        echo " hello from iphone " ;
    }
}


class nokia {

    function sayhello (){

        echo " hello from iphone " ;
    }
}


$phone = new iphone() ;
$phone->facefeature() ;
$phone->fingerprint() ;
$phone->threedmax()   ;
$phone->sayhello()    ;

echo '<pre>' ;
print_r($phone);
echo '<pre>' ;




$sony = new sony() ;
$sony->facefeature();
$sony->fingerprint();
$sony->sayhello();


echo '<pre>' ;
print_r($sony);
echo '<pre>' ;




$nokia = new nokia() ;
$nokia->sayhello();


echo '<pre>' ;
print_r($nokia);
echo '<pre>' ;
*/



// **********************************************************************


trait fingerprint {

    public function fingerprint(){
        echo ' this is finger print ' ;
    }
}

trait threedmax {

    public function threedmax(){
        echo ' this is threedmax feature ' ;       
    }
}


trait facefeature {

    public function facefeature(){
        echo ' this is facefeature ' ;   
    }
}


trait allfutres {

    use facefeature;
    use fingerprint;
    use threedmax;
}




class iphone {
    use allfutres ;

    function sayhello (){

        echo " hello from iphone " ;
    }
}



class sony {
    use facefeature;
    use fingerprint;
    function sayhello (){

        echo " hello from iphone " ;
    }
}


class nokia {

    function sayhello (){

        echo " hello from iphone " ;
    }
}


$phone = new iphone() ;
$phone->facefeature() ;
$phone->fingerprint() ;
$phone->threedmax()   ;
$phone->sayhello()    ;

echo '<pre>' ;
print_r($phone);
echo '<pre>' ;




$sony = new sony() ;
$sony->facefeature();
$sony->fingerprint();
$sony->sayhello();


echo '<pre>' ;
print_r($sony);
echo '<pre>' ;




$nokia = new nokia() ;
$nokia->sayhello();


echo '<pre>' ;
print_r($nokia);
echo '<pre>' ;
?>