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

    <h1>Ruet Debating Club</h1>

    <div class="img" style="max-width:800px">
    <img class="mySlides" src="clubs/debate/rdc.jpg" style="width:100% ">
    <img class="mySlides" src="clubs/debate/rdc2.jpg" style="width:100%">
    <img class="mySlides" src="clubs/debate/rdc3.jpg" style="width:100%">
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
  
    </br>
    <div class="cont"><h3>Be Prepare!</h3>
    <p> During debating club, the pupils are split into teams and debate current relevant topics. The main aim for debating club enables pupils to develop their speaking and listening skills and ability to express themselves verbally in front of a group, which builds confidence. It helps them to develop their research skills as well as broadening their horizons and begin to explore big ethical questions. This is a popular club and some debates do get very lively! Debate clubs are formed within schools, universities, youth clubs and community centers. Although they are usually initiated at the school level, they can also be formed in community and youth centers in countries where political conditions make it difficult to work within the school system. These clubs may then function as an educational program offered by the particular institution. The debate club represents the heart of the IDEA mission. If successfully administered, these locally-based institutions will eventually flourish into independent national debate organizations, which hold membership in IDEA and are capable of upholding and promoting the principles of IDEA and of debate. The Functions of the Debate Club: At the club level, debating teams, along with their coaches and other club members, prepare for tournaments and serve the broader school community. Parents, teachers, and community members are encouraged to participate as judges, fundraisers, and volunteers within the club program. Clubs sponsor local events such as public debates and strive to encourage the democratic exchange of ideas throughout the region. Debate clubs are as inclusive as possible (see starting a debate club for more on club composition), and students of differing ages, grades, and abilities are encouraged to participate and contribute to the club and its efforts. Debate Clubs as the Foundation of Independent National Debate Organizations: The debate club serves as the starting point from which, ideally, an independent national debate organization will arise. IDEA works to initiate this process via a five-year program (program length may vary depending upon funding and other factors). During the first year of the program, IDEA reaches out to secondary school teachers interested in debate. These initial trainees receive extensive instruction in the fundamentals of debate, along with information on how to create debate clubs in their schools. During the second year, a national training team is selected from those teachers first trained by IDEA; who are asked to begin developing a strategy for integrating debate into the curriculum of local schools. RUET Debating Club (RUET DC) is one of the most popular organizations of RUET. The motto of the organization is "Our Debate, Our Dream." Its anniversary is 4 May 1991. Its main purpose is building the culture of debating among students to make them expert in debate, presentation and leadership.
    </p>
    
    </div>
</body>
</html>