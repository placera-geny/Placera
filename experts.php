<!DOCTYPE html>
<html>
<head>
  <title>Team Members</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" type="text/css" href="expertsDesign.css">
  
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400" rel="stylesheet">
  

   

</head>
<body>


<?php 
include ('nav.php');
?>



<div class="container section-ourTeam" style="margin-top: 2%; font-size: 130%;">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 ourTeam-heading text-center">
      <h1 style="font-size:250%; font-family: 'Montserrat', sans-serif;">Our Experts</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="row section-success ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="images/aakash.jpg">
        </div>
        <div class="col-md-12 section2">
          <p>Akash Mishra</p><br>
          <h1>Entrepreneur</h1><br>
        </div>
        <div class="col-md-12 section3">
          <p>
            SRM University<br>
            IT, Third Year
          </p>
        </div>
        <div class="col-md-12 section4">
          <a href="https://www.facebook.com/rishabh.goel.7370"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/rigoel/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="row section-info ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="images/iyappan.jpg">
        </div>
        <div class="col-md-12 section2">
          <p>Iyappan Appu</p><br>
          <h1>Data Scientist</h1><br>
        </div>
        <div class="col-md-12 section3">
          <p>
            SRM University<br>
            CSE, Third Year
          </p>
        </div>
        <div class="col-md-12 section4">
          <a href="https://www.facebook.com/vaibhav.puru"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="https://twitter.com/vaibhavpuru"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/vaibhav_puru/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/in/vaibhav-sharma-0b6629136/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>

        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="row section-danger ourTeam-box text-center">
        <div class="col-md-12 section1">
          <img src="images/nishank.jpg">
        </div>
        <div class="col-md-12 section2">
          <p>Nishank Sharma</p><br>
          <h1>Machine Learning</h1>
        </div>
        <div class="col-md-12 section3">
          <p>
            SRM University<br>
            CSE, Second Year
          </p>
        </div>
        <div class="col-md-12 section4">
          <a href="https://www.facebook.com/ganga.singh.79462815"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
          <a href="https://twitter.com/gangabagga?s=08"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/ganga__03/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- row ends -->

  <div style="margin-top: 5%; background-color: #418587; color: white; padding: 2%; ">
    <h1 style="margin-left: 2%;">Having issues?</h1>
    <p style="margin-left: 2%;">Reach out our experts below.</p>
  </div>

<form style="margin-top: 2%; border: 2px solid #CFD5D5; padding: 2%; margin-bottom: 10%;" method="post" action="send.php">
  <div style="border-bottom: 2px solid #CFD5D5; margin-bottom: 1%;">
    <h2 style="margin-bottom: 1.5%; font-weight: bold; margin-left: 1%;">Fill in your details :</h2>
  </div>
  <div class="form-row" style="margin-top: 5%;">
    <i class="material-icons" style="margin-top: 1%; font-size: 200%; margin-right: 1%;">account_circle</i>
    <div class="col-lg-5 mb-3">
     <input type="text" class="form-control" id="validationDefault01" placeholder="Name" name="Name" style="float: left;" required>
    </div>
    <i class="material-icons" style="margin-top: 1%; font-size: 200%; margin-left: 2%; margin-right: 1%;">email</i>
    <div class="col-md-5 mb-3">
      <input type="email" class="form-control" id="inputEmail3" name="Email" placeholder="Email" required>
    </div>
     </div>
   

  <fieldset class="form-group" style="margin-top: 3%;">
    <div class="form-row">
      <i class="material-icons" style=" font-size: 200%; margin-right: 1%;">assignment_ind</i>
      <legend class="col-form-label col-sm-3 pt-0">Choose your expert</legend>
    </div>
    <div class="form-row" name="expert1" style="margin-left: 8%; margin-top: 0.8%;">
      <div>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="gridRadios1" value="Akash Mishra" checked>
          <label class="form-check-label" for="gridRadios1">
            Akash Mishra
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="gridRadios2" value="Iyappan S">
          <label class="form-check-label" for="gridRadios2">
            Iyappan S
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio"  id="gridRadios3" value="Rishabh Goel">
          <label class="form-check-label" for="gridRadios3">
            Rishabh Goel
          </label>
        </div>
      </div>
    </div>
  </fieldset>

   <div class="form-row" style="margin-top: 3%;">
     <i class="material-icons" style=" font-size: 200%; margin-right: 1%;">textsms</i>
      <legend class="col-form-label col-sm-10 pt-0">Message:</legend>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="message"  placeholder="Write your message..."  style="padding: 1%; margin-top: 1%; margin-left: 5%; height: 100%; width: 90%;" rows="8" cols="10" maxlength="500" required></textarea>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" style="margin-left: 54%; margin-top: 2%;">Submit</button>
    </div>
  </div>
</form>

</div>



    

</body>
</html>