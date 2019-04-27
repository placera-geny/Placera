<!DOCTYPE html>
<html>
<head>
  <title>Company-AMADEUS</title>
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
	
 <img src="amadeus.png" width="45%;" style=" margin-left: 27%; margin-top: 2%; margin-bottom: 1%;">

<hr style="margin-bottom: 1%; margin-top: 0%;">
</div>

<div class="container">
  <h1 style="margin-bottom: 2%;">About the Company</h1></ul>
  <ul>
  <li style="font-size: 130%;">Amadeus India Private Limited, wholly owned by Bird Group, one of India's largest travel conglomerates, has been a pioneer in providing a global platform to the Indian Travel industry by enabling access to state of the art travel automation technology.</li>
  <li style="font-size: 130%;" > Set up in 1994, Amadeus India Private Limited was established with the objective of providing IT and software services, developing software products and automated tools, for the travel trade industry including customized software products for travel agents and travel service providers.
 </li>
  <li style="font-size: 130%;" >Amadeus India has its head office in New Delhi and a wide network of 40 branch offices providing software connectivity to travel agents in the Indian sub-continent to access over 95% of scheduled airline seats as well as hotel rooms, insurance packages, car hire and other travel services worldwide. </li>
  <li style="font-size: 130%;" >Amadeus has central sites in Madrid, Spain (corporate headquarters and marketing, Sophia Antipolis, France (product development), Erding, Germany (data processing centre) and Bangalore, India (software lab) as well as regional offices in Boston, Bangkok, Buenos Aires, Dubai, Miami, Istanbul, Singapore, and Sydney.</li>
  <li style="font-size: 130%;"> At market level, Amadeus maintains customer operations through 173 local Amadeus Commercial Organisations (ACOs) covering 195 countries. The Amadeus group employs 14,200 employees worldwide.</li>
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
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">B.Tech and M.Tech</p>
       </div>
    </div>
  </div>


   <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card"  style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">BOARD MARKS</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">80</p>
       </div>
    </div>
    </div>


      <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;" >
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">BTech & Mtech CGPA</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">8.00</p>
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
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">CSE, IT, Bigdata, Cloud Computing and ISCF</p>
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
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">8.1 L.p.a</p>
       </div>
    </div>
    </div>

     
      <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">JOB TITLE</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Development and QA Profile</p>
       </div>
    </div>
    </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">JOB LOCATION</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Bangalore</p>
       </div>
    </div>
    </div>

      

  </div>
</div>

 <hr style="margin-bottom: 3%; margin-top: 5%;">
<div class="container">
	

 <h1 style="font-family: sans-serif; text-align: center; font-size: 300%; margin-bottom: 2%; color: rgb(0,0,0);">How we hire</h1>

 <p style="text-align: center; margin-left: 15%; margin-right: 15%; font-size: 120%; margin-bottom: 5%; font-family: sans-serif; color: rgb(71, 67, 66  );">At Amadeus, our employees come from a variety of backgrounds and have a wide range of experience, but we share one goal. We’re dedicated to creating technology that makes travel better for everyone. Whether you’re an avid techie, an experienced business professional, a recent graduate or a student, we have a job for you.Working with us, you’ll develop your skills and build an international career that matters. Our technology powers airlines, airports, hotels, travel agencies and more. We’re one of the world’s 15 largest software companies, and Red Hat’s 2016 Cloud Innovator of the year.
 When you join Amadeus you’ll be challenged. You’ll make an impact. You’ll advance your career. And you’ll shape the future of travel.


</p>
<hr>
<p style="font-family: sans-serif; font-size: 250%; ">Recruitment Process</p>
<p style="font-size: 130%; margin-bottom: 3%;">There are 3 main rounds in the process:</p>

<ul>
	<li class="round">Online Round</li>
 
    <ul>
    <li class="round_steps">The test consists of questions based on verbal and numerical reasoning.</li>
    <li class="round_steps">19 minutes are given for 30 verbal reasoning questions and 25 minutes for 25 numerical reasoning questions.</li>
    <li class="round_steps">Preparations for test can be done on SHL by solving online papers.</li>
    </ul>
</ul>

<ul>
	<li class="round" style="margin-bottom: 2%;">Technical Interview </li>
  
    <ul>
       <li class="round_steps">This round goes on for around 1hr to 1hr 30mins.</li>
      <li class="round_steps">In the technical round, some of the subjects that you will be tested include C, Data Structures, and DBMS. Along with these, prepare on two more subjects from your branch.</li>
      <li class="round_steps">In most of the technical interviews, the interview panel questions you on your favorite subject and in this case, you can speak about the subjects that you have prepared. Puzzle questions are often asked.</li>
      <li class="round_steps" style="margin-bottom: 2%;">Questions based on projects made by the student are often asked. </li>
    </ul>
    </ul>

<ul>
	<li class="round">HR interview</li>

     <ul>
       <li class="round_steps">It goes on for around 10-15 mins. In the HR round, the interview panel questions you everything/anything related to your personality, family, education, hobbies, internships, work experience (if relevant), general knowledge, etc.</li>
     </ul>
</ul>

</div>

<hr style="margin-bottom: 3%; margin-top: 5%;">

<div class="container" >

<p style="font-family: sans-serif; font-size: 250%;">Syllabus for Interview</p>
<p style="font-size: 130%; margin-bottom: 3%;">Here are some of the key topics you need to prepare for your interview :</p>

<ul>
	<li class="syllabus">Understanding of OOPS</li>

  <li class="syllabus">Coding- C, C++ or Java</li>

	<li class="syllabus">Data Structures</li>

	<li class="syllabus">DBMS</li>
			
	<li class="syllabus">Project Based Knowledge</li>

	<li class="syllabus">Time Complexity</li>
   
    <li class="syllabus">Puzzle Based Questions</li>
   
  
</ul>
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