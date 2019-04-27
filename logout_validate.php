<?php session_start(); ?>

<?php

$_SESSION['username'] = null;
$_SESSION['mobile_num'] = null;
$_SESSION['user_type'] = null;
$_SESSION['email'] = null;

header("Location: index.php");

?>