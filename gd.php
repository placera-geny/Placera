<!DOCTYPE html>
<html>
<head>
  <title>GD Preparation</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/css/mdb.min.css

">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.4/js/mdb.min.js"></script>
  

   <link rel="stylesheet" type="text/css" href="company.css">


   <script>
function showResult(str) {
  if (str.length==0) 
  { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
   
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
   
<!-- <script src="jquery.js"></script> 
    <script> 
    $(function(){
      $("#includedContent").load("sidebar+nav.html"); 
    });
    </script> 
  -->


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

 
 <h2 style="font-size: 400%;  margin-bottom: 2%; margin-top: 4%;">GD Preparations</h2>
 <p style="font-size: 150%; margin-left: 2%;">To crack a GD,  it is important to understand what it is!
First it is necessary to break the cliche that a GD is a debate in a group, where we need to bring and prove our point. </p>

 

 <p style="font-size: 150%; margin-left: 2%;">A group discussion is an exchange of information, ideas, and opinions among a group of people with 2 possible objectives:</p>
 <ol style="font-size: 130%; margin-left: 4%;">
   <li style="font-weight: bold;">For the purpose of EVALUATION.</li>
   <li style="font-weight: bold;">To solicit opinion, BRAINSTORMING.</li>
 </ol>

 <br>

 
 <p style="font-size: 150%; margin-left: 2%;">Treat it just like a general discussion that we have with our family or friends before making any decision, to sought their opinion, so that we have diversified views!!</p>


  <video  controls style="margin-left: 8%; margin-top: 4%; margin-bottom: 8%; border: 2px solid black; width: 90%;">
  <source src="GD.mp4" type="video/mp4">
  <source src="GD.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 

	</div>
</div>
</div>

<div id="footer">

</div>

<?php
include ('footer.php');
?>

    
</footer>      

</body>
</html>
