<!DOCTYPE html>
<html>
<head>
  <title>Company-PAYODA</title>
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
	
 <img src="payoda.png" width="45%;" style=" margin-left: 27%; margin-top: 2%; margin-bottom: 1%;">

<hr style="margin-bottom: 1%; margin-top: 0%;">
</div>

<div class="container">
  <h1 style="margin-bottom: 2%;">About the Company</h1></ul>
  <ul>
  <li style="font-size: 130%;">Payoda Technology Inc. is a Digital Transformation partner to Healthcare, Retail, Textiles and Manufacturing Industries founded in 2005.</li>
  <li style="font-size: 130%;" >A leader in technology solutions and services, Payoda works with global businesses enabling them to be efficient, focused and innovative. </li>
  <li style="font-size: 130%;" > With our expertise in End User Research, Human Centered Design, Product Design, Product Engineering and Analytics, we use cutting-edge methodologies to transform your business. Partner with us to address diverse customer needs and to deliver scalable solutions.</li>
  <li style="font-size: 130%;" >  Payoda offers software solutions, products and services to clients across North America, Europe and Asia.
</li>
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
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">B.Tech</p>
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
        <h3 class="card-title" style="text-align: center; font-size: 200%; margin-top: 3%; color: #2E120C;">BTech CGPA</h3>
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
        <p class="card-text" style="text-align: center; font-size: 200%; margin-bottom: 5%; color: #EE810D; font-style: italic;">CSE, IT, EEE, ECE  and Software</p>
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
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Soft</p>
       </div>
    </div>
  </div>


    <div class="col-lg-6 col-md-6 col-sm-6">
     <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">SALARY</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Intern 10k-15k CTC : 4.5 L.p.a</p>
       </div>
    </div>
    </div>

     
      <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-bottom: 15%;">
      <div class="card-block">
        <h3 class="card-title" style="text-align: center; font-size: 230%; margin-top: 3%; color: #2E120C;">JOB TITLE</h3>
        <hr width="70%" style="margin-top: 0; margin-bottom: 0;">
        <p class="card-text" style="text-align: center; font-size: 180%; margin-bottom: 5%; color: #EE810D; font-style: italic;">Software Engineer</p>
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
<!--
 <hr style="margin-bottom: 3%; margin-top: 5%;">
<div class="container">
	

 <h1 style="font-family: sans-serif; text-align: center; font-size: 300%; margin-bottom: 2%; color: rgb(0,0,0);">How we hire</h1>

 <p style="text-align: center; margin-left: 15%; margin-right: 15%; font-size: 120%; margin-bottom: 5%; font-family: sans-serif; color: rgb(71, 67, 66  );">We talk Less. We do more. We fail fast. We learn from our mistakes. We work in intensely collaborative ways to ensure we are building the right things, the right way. We are optimists. We build each other up. And we believe that the biggest innovations often come from small accidents.
</p>
<hr>
<p style="font-family: sans-serif; font-size: 250%; ">Recruitment Process</p>
<p style="font-size: 130%; margin-bottom: 3%;">The recruitment process of <strong>Payoda</strong> has 3 main rounds:</p>

<ul>
	<li class="round">Written Round</li>

  <ul>
    <li class="round_steps">The Written round consists of 3 sections, Aptitude, Verbal Ability and Technical.</li>
    <li class="round_steps">There are 30 Questions in the Aptitude section. The important topics include Time, Speed and Work, Percentages, Profit and Loss, Ratio and Proportion, Probability, Triangles, and Functions.</li>
    <li class="round_steps">There are 30 questions in the Verbal Ability section. The important topics include Reading Comprehension, Sentence Correction, Identifying error in a sentence, Synonyms, and Antonyms.</li>
    <li class="round_steps">There are 44 questions in the Technical Section. The important topics include C, Data Structures, and DBMS.</li>
    <li class="round_steps" style="margin-bottom: 2%;">The allotted time to solve the questions in these sections is 120 minutes. There is no negative marking in this round.</li>
  </ul>

	<li class="round" style="margin-bottom: 2%;">Technical Interview </li>
  
   <ul>
     <li style="font-size: 120%; font-weight: bold; margin-bottom: 1%; font-family: sans-serif;">ROUND ONE</li>

    <ul>
      <li class="round_steps">In the technical round, some of the subjects that you will be tested include C, Data Structures, and DBMS. Along with these, prepare on two more subjects from your branch.</li>
      <li class="round_steps" style="margin-bottom: 2%;">In most of the technical interviews, the interview panel questions you on your favorite subject and in this case, you can speak about the subjects that you have prepared.</li>
    </ul>

    <li style="font-size: 120%; font-weight: bold; margin-bottom: 1%; font-family: sans-serif;">ROUND TWO (Sometimes)</li>

     <ul>
       <li class="round_steps">This round is for elimination in most of the cases. This is another technical interview but under pressure.</li>
      <li class="round_steps">Confidence matters a lot in this round as the interview panel is going to check whether you are able to manage the stress or not. When you are pushed out of your comfort zone, keep calm and answer the questions that you know.</li>
      <li class="round_steps" style="margin-bottom: 2%;">If you don't know the answer, don't give up, try attempting it with your knowledge./li>
     </ul>

   </ul>

	<li class="round">HR interview</li>

     <ul>
       <li class="round_steps">In the HR round, the interview panel questions you everything/anything related to your personality, family, education, hobbies, internships, work experience (if relevant), general knowledge, etc.</li>
     </ul>
</ul>

</div>

<hr style="margin-bottom: 3%; margin-top: 5%;">

<div class="container" >

<p style="font-family: sans-serif; font-size: 250%;">Syllabus for Interview</p>
<p style="font-size: 130%; margin-bottom: 3%;">Here are some of the key topics you need to prepare for your interview :</p>

<ul>
	<li class="syllabus">Problem Solving and Technical aptitude</li>

	<li class="syllabus">Coding- C, C++ or Java</li>

	<li class="syllabus">Algorithms</li>
			
	<li class="syllabus">Data Structures</li>

	<li class="syllabus">Operating Systems</li>
   
    <li class="syllabus"> Database Systems and Management</li>
   
   <li class="syllabus">Networks</li>

  <li class="syllabus">Understanding of OOPS</li>
  
   <li class="syllabus">Systems Knowledge</li>


</ul>
</div>

-->
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