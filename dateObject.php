<?php
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
    <style>
	    body{background-color:#333;}
		
		.clock{color:#F5DEB3;
			   position:absolute;
			   transform:translateX(-50%) translateY(-50%);
			   top:50%;
			   left:50%;
		       border:5px solid #222;
			   border-radius:5px;
			   padding:15px;
			   font-size:100px;
			   font-family:Algerian;
			   }
	</style>
</head>
<body>
    <div id="clockDisplay" class="clock"></div>
	<script type="text/javascript">
	    function printTime()
		{
		    var now =new Date();
			var h = now.getHours();
			var m = now.getMinutes();
			var s = now.getSeconds();
			var session="AM";
			if(h>12)
			{
			    h=h-12;
				session="PM";
			}
			
			if(h==0)
			{
			    h=12;
			}
			
			h = (h < 10) ? "0" + h : h; //also if statements in ternary
			m = (m < 10) ? "0" + m : m;
			s = (s < 10) ? "0" + s : s;
			
			
			var time = h+":"+m+":"+s+" "+session;
			
			document.getElementById("clockDisplay").innerText=time;
			document.getElementById("clockDisplay").textContent=time;
			
			setTimeout(printTime,1000);
		}
		printTime();
		
		
		
    </script>
</body>
</html>