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
        <img src="clubs/ruet.png">
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

    <h1>Robotic Society of Ruet</h1>

    <div class="img" style="max-width:800px">
    <img class="mySlides" src="clubs/platoon/crack3.png" style="width:100% ">
    <img class="mySlides" src="clubs/platoon/crack4.jpg" style="width:100%">
    <img class="mySlides" src="clubs/platoon/crack.jpg" style="width:100%">
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
    <div class="cont"><h3>Team Crack Platoon:</h3>
    <p>Crack Platoon is the gathering of some strongly motivated and highly enthusiastic youth committed to be the leader of a new revolution. Flash Back: On the very beginning of our historic liberation war in 1971, the Pakistani Rulers could understand the importance of demolishing the capital of Bangladesh, Dhaka. As destroying the captial would be very helpful for them to destroy the whole country. But, some youth came forward to make their plan a failure. They were known as “Crack Platoon”. Their duty was to design attacking plans for the enemy. Unfortunately, some of the members were caught by the Pakistani military and they were tortured violently but nothing could be revealed from them about the plans designed by the liberation war heroes. Inspired from their patriotism, a group of highly enthusiastic youths felt their responsibilities to their motherland. Finally, the day, November 9, 2015 was the day for these youth to be gathered with a view to working together for a better future. THE TEAM CRACK PLATOON begins. . Our Mission: Team Crack Platoon is strongly focused on the improvement of the automobile sector in Bangladesh. Till now, there has been no self-contained automobile manufacturing company in our country. We gathered to break the silence in this challenging engineering sector. We want Bangladesh to be one of the leading car manufacturing countries of the world. Our team: Crack Platoon has 23 hard-working and highly skilled personalities in number. They are from different fields of engineering like Mechanical Engineering, Mechatronics Engineering, Computer Science and Engineering and so forth. Our Achievements: Immediately after the formation of crack platoon, we have already participated in various national and international competitions organized in home and abroad with prestigious recognitions. 1. We are the Regional Champion of Youth Fest 2016, Rajshahi. 2. Our team had been selected for the first round of Valeo Innovation Challenge 2016,France among 500 ideas from all over the world. 3. We are also qualified as the second round participant of upcoming SHELL ECOMARATHON ASIA 2016, going to be held in Singapore next year. 4. "The Best Passionate Team" & proudly upholding the "6th position" of Quad Bike Design Challenge- 2016 held on Pune, India organized by Fraternity of Mechanical & Automotive Engineers (FMAE), Delhi, India. 5. This Year, Our team is going to participate in "Student Formula"- Japan-2017, as the final round participant in September . This competition is organized by Society of Autometive Engineers ( SAE ) Our Goal: The day will be our success when Bangladesh will be no more dependent on importing automobiles rather she will export world-class automobile vehicles all over the world. Our moral is, ” they achieved our flag in 1971 Let’s wave with pride all over the world. ”
    </p>
    
    </div>
</body>
</html>