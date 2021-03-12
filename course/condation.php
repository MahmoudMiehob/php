<?php
/*
$num1 = 100 ;
$num2 = 100 ;


if ($num1 > $num2) {

    echo "$num1" . " " . "is larger than " . "$num2" ;
}

elseif ($num1 == $num2) {

    echo "$num1" . " " . " =  " . "$num2" ;
}

else {

    echo "$num1" . " " . "is not fewer than  " . "$num2" ;
}
*/


$ticketprice = 500 ;

if ($ticketprice > 400 ) {

    echo "your tict price is " . "$ticketprice" . "usd you have 5% discount" ;
}
elseif ($ticketprice > 500 ) {

    echo "your ticket price is " . "$ticketprice" . "usd you have 15% discount" ;
}
else {

    echo "sorry your ticket price is  " . "$ticketprice" . "you have no discount" ;
}

?> 