<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  

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
    <nav class="col-lg-2 col-sm-3 col-md-3 content-to-hide sidebar_list">
          <ul class=" nav-pills flex-column" style="padding-left: 10px;">

          
<div class="container">
  <div class="row sidebar-list">
        <form>
<input type="text" style=" border: 2px solid #EE810D; padding: 2%;" size="20" placeholder="Search" onkeyup="showResult(this.value)">
<div id="livesearch"></div> 
</form>

  </div>
</div>

          
            <li class="side-item" style="margin-top: 10%;">
              <a class="side-link side" href="companies.php" >Companies<span class="sr-only">(current)</span></a>
              <ul>
                 <li><a class="side-list" href="amadeusCompany.php">Amadeues</a></li>
    <li><a class="side-list" href="amazonCompany.php">Amazon </a></li>
    <li><a class="side-list" href="arubaCompany.php">Aruba </a></li>
    <li><a class="side-list" href="chalkstreetCompany.php">Chalkstreet </a></li>
    <li><a class="side-list" href="ciscoCompany.php">Cisco </a></li>
    <li><a class="side-list" href="coviamCompany.php">Coviam </a></li>
    <li><a class="side-list" href="directiCompany.php">Directi </a></li>
    <li><a class="side-list" href="ernstAndYoungCompany.php">Ernst & Young </a></li>
    <li><a class="side-list" href="futuresFirstCompany.php">Futures First </a></li>
    <li><a class="side-list" href="ingersollRandCompany.php">Ingersoll Rand </a></li>
     <li><a class="side-list" href="insightSystemsCompany.php">Insight Systems </a></li>
    <li><a class="side-list" href="microchipCompany.php">Microchip </a></li>
    <li><a class="side-list" href="microsoftCompany.php">Microsoft</a></li>

    <li><a class="side-list" href="morganStanleyCompany.php">Morgan Stanley </a></li>
    <li><a class="side-list" href="nationStarCompany.php">Nation Star </a></li>
    <li><a class="side-list" href="nseCompany.php">NSE</a></li>
    <li><a class="side-list" href="payodaCompany.php">Payoda</a></li>
    <li><a class="side-list" href="sapLabsCompany.php">SapLab</a></li>
    <li><a class="side-list" href="wellsFargoCompany.php">Wells Fargo </a></li>
              </ul>
            </li>
            <li class="side-item">
              <a class="side-link side" href="questions.php">Questions</a>
              <ul>
              <li><a href="questions-companywise.php" class= "side-list" >Company wise</a></li>
                <li><a href="topic wise questions.php" class= "side-list">Topic wise</a></li>
                <li><a href="easy_med_hard.php" class= "side-list">Difficulty wise</a></li>
                </ul>
            </li>
            <li class="side-item">
              <a class="side-link side" href="interviewPrep.php">Interview Preparations</a>
               <ul>
              <li><a href="resume.php" class= "side-list" >Resume Preparations</a></li>
                <li><a href="gd.php" class= "side-list">GD Preparations</a></li>
                <li><a href="tips.php" class= "side-list">Interview Tips</a></li>
                </ul>
            </li>
          </ul>
        </nav>
    </body>
</html>