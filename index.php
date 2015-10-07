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
				alert(this);
				//this is where the event code goes for the moveForward event
				//php script is executed and passed the proper parameter
        	});
    	});
	</script>
	
</head>

<body>

	<!-- Top center text -->
	<h1 id="AVATARTopCenterText">AVATAR Control GUI</h1>
	
	<!-- AVATAR Movement Controls -->
	<h1 id="AVATARMovementControlsLabel"> Movement Control</h1>
	<!-- Move foward -->
	<div id="moveForward" class="moveButton"> Move Forward </div>
	<!-- Move left -->
	<div id="moveLeft" class="moveButton"> Move Left </div>
	<!-- Move right -->
	<div id="moveRight" class="moveButton"> Move Right </div>
	<!-- Move backwards -->
	<div id="moveBackwards" class="moveButton"> Move Backwards </div>
	
	<!-- AVATAR Video -->
	<h1 id="AVATARVideoText"> AVATAR Video </div>
	<div id="AVATARVideo"> </div>
	
	<!-- User Video -->
	<h1 id="UserVideoText"> User Video </div>
	<div id="UserVideo"> </div>
	
	

</body>
</html>