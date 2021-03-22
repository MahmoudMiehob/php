<?php

abstract class makedevice {


    public $ram ;

    public function sayhello (){



    }
}


class appledevice extends makedevice {


}


$iphone6plus = new appledevice() ;

echo '<pre>' ;
print_r($iphone6plus) ;
echo '<pre>' ;
?>