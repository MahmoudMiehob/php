<?php
   $lessonName = "concatination" ;
   $homepage   = " php concatination " ;
   $heading    = " welcome to concatination " ;
   $brief      = " this lesson take About concatination And How to used " ;
   $languages  = "<li>php</li>" ;
   $languages .= "<li>html</li>" ;
   $languages .= "<li>css</li>" ;
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $homepage ; ?></title>
</head>
<body>
    <?php echo "
        <h1> $heading </h1>
        <p> $brief </p>
        <p> hello php </p> " ; ?>
    <?php  echo "hello" . " " . "world"  ?><br>
    <?php echo 1 . " " . 2  ?>
        <h2> the languages i love </h2>
    <ul>
         <?php echo $languages ; ?>   
    </ul>
    
</body>
</html>