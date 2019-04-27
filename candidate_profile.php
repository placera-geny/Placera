<?php include("includes/db_connect.php"); ?>

<?php session_start(); ?>

<?php ob_start(); ?>

<?php 

if (!isset($_SESSION['user_type'])) {

    header("Location: index.php");
    
}

if($_SESSION['user_type'] !== 'Candidate'){
    header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
   
   <link rel="stylesheet" type="text/css" href="candidate_profile.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

   <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">

      <!-- sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
       <title>Login</title>

  </head>
  <body>

<?php

include("nav.php");

?>

<div class="container-fluid">
  <div class="row">
  <div class="col-lg-2">
    <div>
    <img class="rounded-circle img-fluid" style="max-width: 90%; height: auto; margin-top: 5%; margin-left: 5%;" src="images/ganga.jpeg">
    </div>
    <h3 style="margin-top: 8%; font-family: 'Oswald', sans-serif;">
      <?php 

    $Email = $_SESSION["email"];

    $sql = "SELECT Name FROM users WHERE Email = '$Email'";
    $result = $conn->query($sql);

      if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo strtoupper($row["Name"]);
  }
}
  
  ?>
</h3>

    <hr>
  </div>

  <div class="col-lg-10">
<div class="vl"></div>

  </div>
  </div>
</div>


</body>
</html>