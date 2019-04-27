<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
     <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

    <title>Placera</title>

    <!-- Bootstrap core CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="design.css?v=<?php echo time(); ?>" rel="stylesheet">

  </head>
  <body>

 <div class="desktop">
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark" >
      <a class="navbar-brand" style="padding: 0;" href="index.php"><img src="images/logo1.png" width="140px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto" style="margin-left: 20%;">
            <li class="nav-item ">
              <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
            </li>
         <!--    <li class="nav-item ">
              <a class="nav-link" href="#">JOBS<span class="sr-only">(current)</span></a>
            </li> -->
            <li class="nav-item ">
              <a class="nav-link" href="companies.php">COMPANIES<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="experts.php">EXPERTS<span class="sr-only">(current)</span></a>
            </li>
          <li class="nav-item ">
              <a class="nav-link" href="qa.php">FAQ<span class="sr-only">(current)</span></a>
            </li>
          </ul>
      
        </div>

       
<!--         <div id="myRegister" class="sidelogin">
  <a href="javascript:void(0)" class="closelog" onclick="closeLogin()">&times;</a>
  <ul class="loginbar">

     <button class="btn btn-sm" style="background-color:#004244; color: white; font-family: 'Montserrat', sans-serif; padding: 5px !important; width: 100px !important; "><a href="register.php" style="text-decoration:none; color: white;">REGISTER</a></button> 
     <br>
     <br>

     <button class="btn btn-sm" style="background-color:#004244; color: white; font-family: 'Montserrat', sans-serif; padding: 5px !important; width: 100px !important; "><a href="login.php" style="text-decoration:none; color: white;">LOG IN</a></button>
           
          </ul>
</div> -->

<!-- Use any element to open the sidenav -->
<!-- <span onclick="openLogin()" style="position: absolute; right: 0; margin-right: 3%;"><img src="images/menu.png" width="40px"></span> -->
     
      </nav>
    </header>
</div>

<div class="mobile">
   <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
         <a class="navbar-brand" style="padding: 0;" href="index"><img src="images/logo1.png" width="150px"></a>
       
        <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <ul class="sidebar">
            <li class="side-item ">
              <a class="side-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
            </li>
          <!--   <li class="side-item ">
              <a class="side-link" href="#">JOBS<span class="sr-only">(current)</span></a>
            </li> -->
            <li class="side-item ">
              <a class="side-link" href="companies.php">COMPANIES<span class="sr-only">(current)</span></a>
            </li>
            <li class="side-item ">
              <a class="side-link" href="experts.php">EXPERTS<span class="sr-only">(current)</span></a>
            </li>
          <li class="side-item ">
              <a class="side-link" href="qa.php">FAQ<span class="sr-only">(current)</span></a>
            </li>
          </ul>
</div>

<!-- Use any element to open the sidenav -->
<span onclick="openNav()" style="position: absolute; right: 0; margin-right: 3%;"><img src="images/menu.png" width="40px"></span>
      </nav>
    </header>


</div>
  </body>
  </html>
  
  <script type="text/javascript">

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    
}

function openLogin() {
    document.getElementById("myRegister").style.width = "15%";
    
}

/* Set the width of the side navigation to 0 */
function closeLogin() {
    document.getElementById("myRegister").style.width = "0";
    
}
</script>