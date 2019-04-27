
<?php include ("includes/db_connect.php"); ?> 

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <link rel="icon" href="../../../../favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>Apply</title>

     <!-- Custom styles for this template -->
    <link href="apply_job.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

   

  </head>
  <body>

<?php

include('nav.php');

?>

<div class="container" style="margin-top:2%;">



	<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-9" style="text-align: center;">
<p style="color: #F4F6F6; font-family: Quicksand, sans-serif; font-size: 150%; background-color: #0B5345; padding: 2%; border-radius: 15px 15px 15px 15px; text-align: center; width: 90%; "><i class="fas fa-clipboard-list" style="font-size: 140%; "></i> &ensp;Job Applications </p>
</div>
<div class="col-sm-1"></div>
</div>
</div>
<hr>

<div class="container">
<div class="row" style="margin-top: 3%;">
	<div class="col-md-9" >

<?php



$sql = "SELECT * FROM candidates ORDER BY Post_date DESC";
$result = $conn->query($sql);
$i = 1;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
        '<div class="container" >'.
        '<div class="card flex-row flex-wrap" style="border:1px solid #0B5345; font-family:Oswald,sans-serif; font-weight:300;">'.
       '<div class="card-header mx-auto" style="height:240px;">'.
       '<img class="rounded-circle" alt="My_photo" width="150px" height="150px" src=uploads/'.$row["Image"].'>'.'<br>'.'<br>'.
       '<a style="color:#0B5345;" title="LinkedIn" href='.$row["LinkedIn"]. '>'.'<i class="fab fa-linkedin" style="font-size: 180%;"></i>'.'</a>'.'&emsp;'.
       '<a style="color:#0B5345;" title="Github" href='.$row["Github"]. '>'.'<i class="fab fa-github-square" style="font-size: 180%;"></i>'.'</a>'.'&emsp;'.
       '<a style="color:#0B5345;" title="Facebook" href='.$row["Facebook"]. '>'.'<i class="fab fa-facebook" style="font-size: 180%;"></i>'.'</a>'.'&emsp;'.
       '<a style="color:#0B5345;" title="Twitter" href='.$row["Twitter"]. '>'.'<i class="fab fa-twitter-square" style="font-size: 180%;"></i>'.'</a>'.
        '</div>'.
          
          
 '<div class="card-body " style="color:#0B5345; padding-top:1%; padding-bottom:0;" >'.
  '<ul class="list-group list-group-flush">'.
    '<li class="list-group-item">'.'<i class="fas fa-address-book" style="font-size: 150%;"></i>'.'&ensp;'.'<span  style="font-size: 150%;">'. $row["Name"].'</span>'.'</li>'.
    '<li class="list-group-item" style="font-size: 125%;">'.'<i class="fas fa-envelope"></i>'.'&ensp;'. $row["Email"].'&emsp;'.'<span style="border-left: 2px solid black; "></span>'.'&emsp;'.'<i class="fas fa-mobile"></i>'.'&ensp;'. $row["Mobile_num"].'</li>'.
    '<li class="list-group-item" style="font-size: 125%;">'.'<i class="fas fa-user-graduate"></i>'.'&ensp;'."BTech".'</li>'.
    '<li class="list-group-item" style="font-size: 125%;">'.'<i class="fas fa-chart-bar" ></i>'.'&ensp;'. $row["Experience"].'&emsp;'.'<span style="border-left: 2px solid black; "></span>'.'&emsp;'.'<i class="fab fa-speakap"></i>'.'&ensp;'. $row["Specialization"].'</li>'.
  '</ul>'.'</div>'. '<div class="w-100"></div>'.
   '<div class="card-footer w-100 text-center">'.
    '<a style="color:#0B5345; font-size:120%; font-weight:500;" target="a_blank" href = uploads/'.$row["Resume"].'>'."MY RESUME".'</a>'.
  '</div>'.'</div>'.'</div>'.'<br>'.'<br>';


    }
} else {
    echo '<div class="card mb-3" style=" background-color:#F4F6F6; color:#0B5345;  font-family: Quicksand, sans-serif;">'.'<div class="card-body">'.'<div class="card-text text-center">'.'<h4>'."WE HAVE NO CANDIDATE YET. PLEASE PROVIDE YOUR REQUIREMENTS ------>".'</h4>'.'</div>'.'</div>'.'</div>';
}

?>
</div>
<div class="col-md-3">
	<div class="card mb-3" style=" background-color:#F4F6F6;  font-family: Quicksand, sans-serif;">
  
  <div class="card-body">
   
    <p class="card-text text-center" style="font-size: 220%; color:#0B5345;">STILL NOT FOUND THE RIGHT CANDIDATE?</p>
  </div>
 <a href="submit_job.php"  style="text-decoration: none;"> <div class="card-footer text-center" style="font-size: 160%; background-color:#0B5345; color: #F4F6F6;">Register yourself with us</div></a>
</div>
	
</div>
</div>


</div>


</body>
</html>

<!-- Bootstrap js -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

