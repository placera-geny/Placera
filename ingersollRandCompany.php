<!DOCTYPE html>
<html>
<head>
  <title>Company-INGERSOLL RAND</title>
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
	
 <img src="ingersollRand.png" width="45%;" style=" margin-left: 27%; margin-top: 2%; margin-bottom: 1%;">

<hr style="margin-bottom: 1%; margin-top: 0%;">
</div>

<div class="container">
  <h1 style="margin-bottom: 2%;">About the Company</h1></ul>
  <ul>
  <li style="font-size: 130%;">Ingersoll-Rand plc is an Irish global diversified industrial manufacturing company formed in 1905 by the merger of Ingersoll-Sergeant Drill Company and Rand Drill Company, rival companies that had each been founded in 1871.</li>
  <li style="font-size: 130%;" >The company is incorporated in Dublin, Ireland, and has its US operations headquartered in Davidson, North Carolina. </li>
  <li style="font-size: 130%;" > Ingersoll Rand India Private Limited was founded in Kolkata in 1921, one of the first American investments in India. </li>
  <li style="font-size: 130%;" >In 1958 the company opened a branch office in Ahmedabad and in 1963 the head office was shifted to Mumbai. Ingersoll Rand established its first manufacturing plant in Naroda, Ahmedabad in 1965 and in 1977 became a public limited company.</li>
  <li style="font-size: 130%;" >Today, Ingersoll-Rand (India) Limited is based out of 22 locations in the country and is listed on the National Stock Exchange of India and the Bombay Stock Exchange.</li>
  </ul>
</div>

<hr style="margin-top: 4%; margin-bottom: 4%;">

<div class="container">
   <h1 style="font-family: sans-serif; text-align: center; font-size: 300%; margin-bottom: 4%; color: rgb(0,0,0);">What we want</h1>

    <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">COURSE</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">M.Tech</p>
       </div>
    </div>
  </div>


   <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card"  style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">BOARD MARKS</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">70</p>
       </div>
    </div>
    </div>


      <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">BTech & Mtech CGPA</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">7.00</p>
       </div>
    </div>
    </div>

    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">HISTORY OF ARREARS</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">NA</p>
       </div>
    </div>
  </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">STANDING ARREARS</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">0</p>
       </div>
    </div> 
    </div>

<div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">ELIGIBLE BRANCHES</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">CSE, Cloud, Electronics and Control and Embedded and PED</p>
       </div>
    </div>
  </div>

</div>

<hr style="margin-top: 10%; margin-bottom: 3%;">


<h1 style="font-family: sans-serif; text-align: center; font-size: 300%; margin-bottom: 4%; color: rgb(0,0,0);">What we offer</h1>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-6">
   <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">TYPE</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Dream</p>
       </div>
    </div>
  </div>


    <div class="col-lg-6 col-md-6 col-sm-6">
     <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">SALARY</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Stipend Rs.12,000 p.m. and CTC Rs 6.0 LPA</p>
       </div>
    </div>
    </div>

     
      <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">JOB TITLE</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Intern cum Placement</p>
       </div>
    </div>
    </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">JOB LOCATION</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Chennai</p>
       </div>
    </div>
    </div>

      

  </div>
</div>

 <hr style="margin-bottom: 3%; margin-top: 5%;">
<div class="container">
	

 <h1 style="font-family: sans-serif; text-align: center; font-size: 300%; margin-bottom: 2%; color: rgb(0,0,0);">How we hire</h1>

 <p style="text-align: center; margin-left: 15%; margin-right: 15%; font-size: 120%; margin-bottom: 5%; font-family: sans-serif; color: rgb(71, 67, 66  );">At Ingersoll Rand, we empower you to inspire progress every day for our customers and our communities -- and for yourself. We offer countless opportunities to build a successful and rewarding career.
</p>
<hr>
<p style="font-family: sans-serif; font-size: 250%; ">Recruitment Process</p>
<p style="font-size: 130%; margin-bottom: 3%;">The recruitment process of <strong>Ingersoll Rand</strong> has 2 main rounds:</p>

<ul>
	

	<li class="round" style="margin-bottom: 2%;">Technical Interview </li>
  
   

    <ul>
      <li class="round_steps">Technical Round goes on for around half an hour to 1 hour. Domain based questions are asked.</li>
      <li class="round_steps" style="margin-bottom: 2%;">In most of the technical interviews, the interview panel questions you on your favorite subject and in this case, you can speak about the subjects that you have prepared.</li>
    </ul>

   

	<li class="round">HR interview</li>

     <ul>
       <li class="round_steps">In the HR round, the interview panel questions you everything/anything related to your personality, family, education, hobbies, internships, work experience (if relevant), general knowledge, etc.</li>
       <li class="round_steps">It goes on for around an hour</li>

     </ul>
</ul>

</div>

<hr style="margin-bottom: 3%; margin-top: 5%;">

<div class="container" >

<p style="font-family: sans-serif; font-size: 250%;">Syllabus for Interview</p>
<p style="font-size: 130%; margin-bottom: 3%;">Here are some of the key topics you need to prepare for your interview :</p>

<ul>

	<li class="syllabus">Coding- C, C++ or Java</li>

	<li class="syllabus">Algorithms</li>
			
	<li class="syllabus">Data Structures</li>

	<li class="syllabus">Operating Systems</li>
   
 <li class="syllabus"> Database Systems and Management</li>  

  <li class="syllabus">Understanding of OOPS</li>
  

</ul>
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