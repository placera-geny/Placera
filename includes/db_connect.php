<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "placera";
 

  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);

  // Check connection
  if ($conn->connect_error) {
      die('err1_connection');
} 


?>