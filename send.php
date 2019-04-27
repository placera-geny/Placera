<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Expert = $_POST['expert1'];
$Message = $_POST['message'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
                                    // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.yahoo.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gangabagga@yahoo.in';                 // SMTP username
    $mail->Password = 'xpik ubeg qqom ivxo';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('gangabagga@yahoo.in', 'Mailer');
    $mail->addAddress('gangasinghbagga@gmail.com', 'gangasinghbagga');     // Add a recipient
    

    //body
    $body = '
    <p><p>You have a new question</p>
    <h2>Contact details</h2>
    <ul>
        <li>Name: </li>' . $Name .
        '<li>Email: </li>' . $Email .
        '<li>Expert: </li>' . $Expert .
        
    '</ul>
        <h3>Message:</h3>
        <li>Message: </li>' . $Message . "</p>";
     

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'testing';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();

    echo "";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

<?php

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
                                    // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.yahoo.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gangabagga@yahoo.in';                 // SMTP username
    $mail->Password = 'xpik ubeg qqom ivxo';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('gangabagga@yahoo.in', 'Mailer');
    $mail->addAddress($Email, 'Confirmation');     // Add a recipient
    

    //body
    $body = '
    <p><p>We have received your request. We will get back to you within 3 days.</p>
    <h2>Contact details</h2>
    <ul>
        <li>Name: </li>' . $Name .
        '<li>Email: </li>' . $Email .
        '<li>Expert: </li>' . $Expert .
        
    '</ul>
        <h3>Message:</h3>
        <li>Message: </li>' . $Message . "</p>";
     

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'testing';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();

    echo "";
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Thank you</title>
	<link rel="stylesheet" type="text/css" href="expertsDesign.css">
</head>
<body>

	      <div id="nav-placeholder">

</div>

<?php 
include ('nav.php');
?>


<div class = "row">
    
<div id="side">

</div>

<?php
 include ('side.php');
?>

<div class = "col-lg-9 col-md-8 col-sm-8">

<div class="container">

<div class="thanks" style="text-align: center; margin-top:15%;">
	
<h1 style="font-family:'Oswald',sans-serif; font-weight: 600; color: #3FA3A3; font-size: 250%; ">Thanks for reaching out to us!</h1>
</div>
</div>
</div>

</body>
</html>
