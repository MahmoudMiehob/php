<?php

$link = __DIR__ . '/mahmoud' ;

$files = scandir($link , ) ;


echo "<pre>" ;

print_r($files) ;

echo "<pre>" ;

foreach($files as $file){

    if(is_file($link . "/" . $file)){

        unlink($link . "/" . $file) ;
    }
}

?>