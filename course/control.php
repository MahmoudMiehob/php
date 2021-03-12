<?php

$admins = array ("osama" , "Hasan" ,"Ali");

$username = $_POST['username'] ;

if(in_array($username , $admins)){

    echo "welcome" . $username . " to control panel" ;
}else{


    echo "sorry";
}


?>