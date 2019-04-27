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
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <title>Apply</title>

     <!-- Custom styles for this template -->
    <link href="apply_job.css" rel="stylesheet">
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


   <!-- sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

 

  </head>
  <body>

<?php

include('nav.php');

?>



<div class="container" style="margin-top: 2%;">

<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-9" style="text-align: center;">
<p style="color: #F4F6F6; font-family: Quicksand, sans-serif; font-size: 150%; background-color: #0B5345; padding: 2%; border-radius: 15px 15px 15px 15px; text-align: center; width: 90%;"><i class="fab fa-wpforms" style="font-size: 140%; "></i> &ensp; Help us to provide you with the best job opportunities. </p>
</div>
<div class="col-sm-1"></div>
</div>
 
<form method="POST" enctype="multipart/form-data" id="job_apply_form" style="width: 100%; align-self: center;">
 

  <div class="form-row">
<div class="col-sm-3"></div>
    <div class="col-sm-6 mb-3">
      <label for="name">Name<span class ="mandatory">*</span></label>
      <input type="text" class="form-control"  placeholder="Write your full name" id="name" name="name" >
    </div>
    <div class="col-sm-3"></div>
  </div>


    <div class="form-row">
<div class="col-sm-3"></div>
    <div class="col-sm-6 mb-3">
      <label for="email">Email ID<span class ="mandatory">*</span></label>
      <input type="email" class="form-control"  placeholder="Write your email" id="email" name="email" >
    </div>
    <div class="col-sm-3"></div>
  </div>


      <div class="form-row">
<div class="col-sm-3"></div>
    <div class="col-sm-6 mb-3">
      <label for="mobile_num">Mobile No.<span class ="mandatory">*</span></label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">91</span>
        </div>
        <input type="text" class="form-control"  placeholder="Your 10-digit mobile number" id="mobile_num" name="mobile_num" aria-describedby="inputGroupPrepend2" >
      </div>
    <div class="col-sm-3"></div>
  </div>
</div>




  
     <div class="form-row">
<div class="col-sm-3"></div>
 <div class="col-sm-2 mb-3">
      <label for="degree">Degree<span class ="mandatory">*</span></label>
      <input type="text" class="form-control"  placeholder="eg. BTech" id="degree" name="degree" >
    </div>
    <div class="col-sm-2 mb-3">
      <label for="experience">Experience<span class ="mandatory">*</span></label>
         <select class="custom-select" id="experience" name="experience" >
    <option disabled selected hidden>Choose...</option>
    <option value="Fresher">Fresher</option>
    <option value="1-2 years">1-2 years</option>
    <option value="2-5 years">2-5 years</option>
    <option value="More than 5 years">More than 5 years</option>
  </select>
      </div>

     <div class="col-sm-2 mb-3">
      <label for="specialization">Specialization<span class ="mandatory">*</span></label>
      <select class="custom-select" id="specialization" name="specialization" >
      <option disabled selected hidden>Choose...</option>

          <?php 
           
          $sql = "SELECT * FROM specialization ORDER BY special_title ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
            while($row = $result->fetch_assoc()) {
              $specialization_title = $row["special_title"];
                echo    
                  '<option value='.$specialization_title.'>'.$specialization_title.'</option>';

              }
            }
          ?>

    </select>
    </div>
    <div class="col-sm-3"></div>
  </div>


        
         
          <div class="form-row">
            <div class="col-sm-3"></div>
<div class="col-sm-6">
   <label for="linkedin">Social Links<span class ="mandatory">*</span></label>
   <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i class="fab fa-linkedin-in"></i></span>
        </div>
        <input type="text" class="form-control"  placeholder="eg. https://www.linkedin.com/YourLinkedInLink" id="linkedin" name="linkedin" aria-describedby="inputGroupPrepend2" >
      </div>
</div>
    <div class="col-sm-3"></div>
  </div>

<div class="form-row">
            <div class="col-sm-3"></div>
             <div class="col-sm-6 ">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i class="fab fa-github"></i></span>
        </div>
        <input type="text" class="form-control"  placeholder="eg. https://github.com/YourGithubLink" id="github" name="github" aria-describedby="inputGroupPrepend2"  >
      </div>
    </div>
     <div class="col-sm-3"></div>
  </div>
   
   <div class="form-row">
    <div class="col-sm-3"></div>
 <div class="col-sm-6 ">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"> &nbsp;<i class="fab fa-facebook-f"></i>&nbsp;</span>
        </div>
        <input type="text" class="form-control"  placeholder="eg. https://www.facebook.com/YourFacebookLink" id="facebook" name="facebook" aria-describedby="inputGroupPrepend2" >
      </div>
    </div>
    <div class="col-sm-3"></div>
  </div>

      <div class="form-row">
    <div class="col-sm-3"></div>
 <div class="col-sm-6">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2"><i class="fab fa-twitter"></i></span>
        </div>
        <input type="text" class="form-control"  placeholder="eg. https://twitter.com/YourTwitterLink" id="twitter" name="twitter" aria-describedby="inputGroupPrepend2" >
      </div>   
</div>
<div class="col-sm-3 mb-3"></div>
</div>


 <div class="form-row">
<div class="col-sm-3"></div>
    <div class="col-sm-3">
  <div class="form-group">

    <label for="resume" style="font-size: 170%; font-weight: bold;">Upload Resume<span class ="mandatory">*</span></label>
    <input type="file" class="form-control-file"  aria-describedby="fileHelp" id="resume" name="resume" style="cursor: pointer;" >
    <small id="fileHelp" class="form-text text-muted">Valid for .docx or .pdf files only</small>
  </div>
</div>

  <div class="col-sm-3 mb-3">
  <div class="form-group">

    <label for="image" style="font-size: 170%; font-weight: bold;">Upload your Image<span class ="mandatory">*</span></label>
    <input type="file" class="form-control-file"  aria-describedby="fileHelp" id="image" name="image" style="cursor: pointer;" >
    <small id="fileHelp" class="form-text text-muted">Valid for .jpeg, .jpg or .png files only</small>
  </div>
</div>
 
    <div class="col-sm-3"></div>
  </div>


  <div class="form-row">
     <div class="col-sm-3"></div>
<div class="col-sm-6 mb-3" style="text-align: center; margin-top: 1%;">
  <button class="btn btn-lg" type="submit" id="submit" style="background-color:#0B5345; color:#F4F6F6; ">Submit form</button>
</div>
 <div class="col-sm-3"></div>
</div>

</form>



</div>


  <!--Login Form -->
  <!--
<div id="logindiv">
<form class="form"  id="login">
<input type="button" id="cancel" value="Cancel"/>
<h3 style="margin-top: 5%;">Please log in to continue</h3>
<hr/>

<div id="my-signin2" style="margin-left: 20%; margin-top: 8%;"></div>

<script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());

    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>

<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

 
</form>

</div>
-->
</body>
</html>

<!-- Bootstrap js -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script> 

<script type="text/javascript">


   $("#submit").click(function(){
       
$("#job_apply_form").validate({
       rules: {
        name: "required",
        email: {
          required: true,
          email: true,
        },
        mobile_num: "required",
        degree: "required",
        experience: "required",
        specialization: "required",
        linkedin: "required",
        github: "required",
        facebook: "required",
        twitter: "required",
        resume: "required",
        image: "required"
        
    },
    messages: {
        name: "Please enter your name",
        email: {
          required: "Please enter your email",
          email: "Please provide a valid email"
        },
        mobile_num: "Please enter your phone number",
        degree: "Please provide your degree",
        experience: "Please provide your experience",
        specialization: "Please provide your specialization",
        linkedin: "Please provide your linkedin profile link",
        github: "Please provide your github profile link",
        facebook: "Please provide your facebook profile link",
        twitter: "Please provide your twitter profile link",
        resume: "Please upload your resume",
        image: "Please upload your image "

    },

    submitHandler: function(form) {
       event.preventDefault();
       var form = $('#job_apply_form')[0];
         var data = new FormData(form);
       

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "job_apply.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(data){
                   
                    
                      if (data.includes("err1_connection")) {
                      swal("Oops!", "Something went wrong!", "error");
                   }
                     if (data.includes("err2_extension")) {
                      swal("Warning!", "Please choose a PDF file for resume!", "warning");
                   }
                     if (data.includes("err3_extension")) {
                      swal("Warning!", "Please choose a JPG, JPEG or PNG file for image!", "warning");
                   }
                     if (data.includes("err4_size")) {
                      swal("Warning!", "File size must be less than or equal to 2 MB!", "warning");
                   }
                     if (data.includes("err5_file_upload_fail")) {
                      swal("Oops!", "Something went wrong! Upload failed", "error");
                   }
                     if (data.includes("success_entry")) {
                      swal({
                        title: "Succesful!",
                        text: "Thank your for joining us!",
                        type: "success"
                      }).then(function(){
                            window.location.href = 'fetch_job_apply.php';
                       });
                   }
                     if (data.includes("email_already_exist")) {
                      swal("Warning!", "Email already exist! Please use a different email id", "error");
                   }
                 
          }
        });
  }
    
 });

      

  });




</script>


  <script type="text/javascript">
$(document).ready(function() {
setTimeout(popup, 0); // Setting time 3s to popup login form
function popup() {
$("#logindiv").css("display", "block");
}

$("#login #cancel").click(function() {
$(this).parent().parent().hide();
});
});

</script>