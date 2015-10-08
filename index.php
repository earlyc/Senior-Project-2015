<?php include("login.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>AVATAR Control Interface</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	
	<script type=text/javascript>
		$(document).ready(function (){
        	$("#moveForward").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=moveForward");
        	});
    		$("#stop").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=stop");
        	});
    		$("#turnLeft").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=turnLeft");
        	});
    		$("#turnRight").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=turnRight");
        	});
    		$("#moveBackwards").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=moveBackwards");
        	});
    		$("#turn180").click(function(e) {
            	e.preventDefault();
				$.get("curl.php?command=turn180");
        	});
    	});
	</script>
	
</head>

<body>

<!-- Logout Link calls the script in logout.php; redirects user to login page -->
<a href="logout.php"> LOGOUT </a>

  
<h1 class="title" id="AVATARTopCenterText">AVATAR Control GUI</h1>
<table style="width:100%">
  <tr>
    
    <td><h1 id="AVATARMovementControlsLabel"> Movement Control</h1></td>		
	<td><h1 id="AVATARMovementControlsLabel"> AVATAR Video </h1></td>
  </tr>
  <tr>
    
    
  </tr>
 
</table>
<table style="width:50%">
  <tr>
    <td></td>
    <td><button class ="button" id ="moveForward">Forward</button></td>		
    <td><button class ="button" id ="stop">STOP</button></td>
  </tr>
  <tr>
    <td><button class ="button"  id ="turnLeft">Turn Left</button></td>
    <td><button class ="button"  id ="moveBackwards">Backwards</button></td>		
    <td><button class ="button" id ="turnRight">Turn Right</button></td>
  </tr>
  <tr>
    <td></td>
    <td><button class ="button" id ="turn180">Turn 180</button></td>		
    <td></td>
  </tr>
</table>

<h1 class="title" id="UserVideo">User Video</h1>
	
</body>
</html>
