<?php
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
		<title>Home page</title>
        <link rel="stylesheet" type="text/css" href="page.css"/>
        
</head>
<body>
<div class="head">
        <img src="clubs/ruet.png"/>
</div> 
<ul>
<li><a  href="home.php">  Home </a></li>  
<li><a>  Ruetian Clubs</a> 
<ul>
    <li><a href="rapl.php">RAPL</a></li>
    <li><a href="IEEE.php">IEEE Ruet</a></li>
    <li><a href="RCF.php">Ruet Career Forum</a></li>
    <li><a  href="RDC.php">Ruet Debating Club</a></li>
    <li><a href="RSC.php">Robotic Society of Ruet</a></li>
    <li><a href="psr.php">Photographic Society of Ruet</a></li>
    <li><a href="onu.php">অনুরণন</a></li>
    <li><a>সমানুপাতিক</a></li>
</ul>
</li>
<li><a>Events</a>
    <ul>
        <li><a>August</a></li>
        <li><a>September</a></li>
        <li><a>October</a></li>
    </ul>
</li>
<li><a href="blogcomment.php">Blog</a></li>
<li><a href="contact.php">  Contact us</a></li>  
</ul></br></br>

    <h1>Ruet Career Forum</h1>

    <div class="img" style="max-width:800px">
    <img class="mySlides" src="clubs/rcf.jpg" style="width:100% ">
    <img class="mySlides" src="clubs/rcf3.jpg" style="width:100%">
    <img class="mySlides" src="clubs/rcf.jpg" style="width:100%">
    </div>
  
    <div class="button" >
      <div class="button2">
        <button class="greyButton" id="grey1" onclick="plusDivs(-1)">❮ Prev</button>
        <button class="greyButton" id="grey2" onclick="plusDivs(1)">Next ❯</button>
      </div>
      <button class="demoButton" id="red1" onclick="currentDiv(1)">1</button> 
      <button class="demoButton" id="red2" onclick="currentDiv(2)">2</button> 
      <button class="demoButton" id="red3" onclick="currentDiv(3)">3</button>
    </div>
  
  <script>
  var slideIndex = 1;
  showDivs(slideIndex);
  
  function plusDivs(n) {
    showDivs(slideIndex += n);
  }
  
  function currentDiv(n) {
    showDivs(slideIndex = n);
  }
  
  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" w3-red", "");
    }
    x[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " w3-red";
  }
  </script>
  
    </br></br>
    <div class="cont"><h3>Be Prepare!</h3>
    <p><strong>RUET Career Forum</strong>, one of the leading student organization in RUET. It started it’s journey on 30 August, 2014. From the very beginning, RCF is working for the betterment of students’ skills, making them prepared for the upcoming job life and corporate world. For this, RCF arranges different seminar, workshop, sessions for self development, job fair etc. What We Do:RCF works for the development of students’ skills in every way possible 1.Regular Session: Regular sessions are arranged for developing various skills. Not only that, RCF creates opportunity for practicing those. 2.Software Training: For the essentiality of different software, RCF provides its member various software training. 3.Update for job circulars and competition: RCF provides update of job circulars for freshers and competition for current students. 4.Company Visit for Practical Experience: RCF arranges scope to visit different company so that students connected to it can gain practical knowledge. 5.Seminar: Seminars are arranged in a regular basis for giving students a glimpse of corporate life, job preparation and future. 6.Workshop: Workshops are arranged in a regular basis for training. 7.Career Fair: Career fair is arranged once a year where different companies across the world participates. 8.Campus Recruitment: Freshers from different departments are recruited in different companies while they are in campus. Programs We Arranged: We always work for the career development of students. Some of our recently arranged programs are Higher Degree Research (HDR) Opportunities In Australia People interested in higher study abroad has no bound of thinking about it. They want… Mentoring Moments: Career In ICT We are glad to inform you all that RUET Career Forum is going to arrange… Seminar With Solaiman Shukhon Solaiman Sukhon a leading motivational speaker of the country took a seminar in RUET. Ruet… Engineering Career Overview Engineering professionals employ mathematical and scientific principles to develop effective solutions to real-world, technical problems.… 1st RCF Job Fair On January 8 & 9, 2016, RCF arranged the most awaited program of RUET “1st… 2nd RCF Career Fair It's that time of the year again when you can get some professional career vision,…
    </p>
    
    </div>
</body>
</html>