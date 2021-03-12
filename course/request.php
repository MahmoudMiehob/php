<?php

echo $_POST['username'] ;

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method = "post">
<input type = "text" name = "username">
<input type = "submit" value = "login">