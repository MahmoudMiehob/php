<?php

if(file_exists(__dir__ . "/php")){

    echo "sorry this directory is existes" ;


}else{

    mkdir(__dir__ . '/php') ;
}

$dir  = __dir__ . '\php\\' ;

file_put_contents($dir . 'text.php' , "hello");

$file = $dir . 'text.php' ;

echo $file ;

chmod ($file , 0444) ;

if (is_writable($file)){

    file_put_contents($file , "hello") ;
}else{

    chmod($file , 0755) ;

    file_put_contents($file , "testing");
}

?>