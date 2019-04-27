<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
   
   <link rel="stylesheet" type="text/css" href="apply_job.css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

      <!-- sweet alert -->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      
       <title>Login</title>

  </head>
  <body>

<?php

include("nav.php");

?>


<div class="container" style="margin-top: 2%;">

<!-- <div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4" style="text-align: center;">
<p style="color: #F4F6F6; font-family: Quicksand, sans-serif; font-size: 150%; background-color: #0B5345; padding: 2%; border-radius: 15px 15px 15px 15px; text-align: center; width: 100%;"><i class="fab fa-wpforms" style="font-size: 140%; "></i> LOG IN </p>
</div>
<div class="col-sm-4"></div>
</div> -->



<form method="POST" enctype="multipart/form-data" id="login_form" style="width: 100%; align-self: center;">
 

  


    <div class="form-row">

    <div class="col-sm-3 mb-3">
      <label for="email">Email-Id<span class ="mandatory">*</span></label>
      <input type="text" class="form-control"  placeholder="Registered Email-Id" id="email" name="email" >
    </div>
    <div class="col-sm-9"></div>
  </div>




      <div class="form-row">

    <div class="col-sm-3 mb-3">
      <label for="mobile_num">Password<span class ="mandatory">*</span></label>
      <div class="input-group">
        <input type="password" class="form-control"  placeholder="Password" id="pass" name="pass" aria-describedby="inputGroupPrepend2" >
      </div>
    <div class="col-sm-9"></div>
  </div>
</div>



  <div class="form-row">
    
<div class="col-sm-6 mb-3" style=" margin-top: 1%;">
  <button class="btn btn-lg" type="submit" id="login_submit" name="login_submit" style="background-color:#0B5345; color:#F4F6F6; ">Login</button>
</div>
 <div class="col-sm-6"></div>
</div>

</form>

</div>
</body>
</html>

<!-- Bootstrap js -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>

<script type="text/javascript">



   $("#login_submit").click(function(){


        

        
$("#login_form").validate({
       rules: {
        
        email: {
          required: true,
          email: true,
        },
       
        pass: "required"
        
        
    },
    messages: {
       
        email: {
          required: "Please enter your email",
          email: "Please provide a valid email"
        },
       
        pass: "Please enter your password"
       

    },

    submitHandler: function(form) {
       event.preventDefault();
       var form = $('#login_form')[0];
         var data = new FormData(form);
       

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "login_validate.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success:function(data){
                   
                    if(data.includes("email_not_found")){
                      swal("Warning!", "Email-id not registered", "error");
                    }
               
                     if (data.includes("success_entry")) {
                         
                            window.location.href = 'user_type.php';
                       }
                   
                     if (data.includes("wrong_password")) {
                      swal("Warning!", "Email-id and Password do not match", "error");
                   }
                 
          }
        });
  }
    
 });

      

  });




</script>

