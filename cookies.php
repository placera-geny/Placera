<?php 

$name = "Placera";
$value = 100;
$expiration = time() + (60*60*24*7);
setcookie($name,$value,$expiration);

?>
