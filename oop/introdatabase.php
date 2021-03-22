<?php


$dsn       = 'mysql:host=localhost;dbname=products';
$user      = 'root' ;
$pass      = '' ;



try {

      $db = new PDO($dsn , $user , $pass) ;
      echo 'connected' ;

}catch(PDOException $e){

    echo 'falied ' . $e->getmessage();
}

?>