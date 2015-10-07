<?php include("login.php"); ?>
<?php include("curl.php"); ?>
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
				$.get("curl.php");
				//alert(this);
			
        		
				//this is where the event code goes for the moveForward event
				//php script is executed and passed the proper parameter
        		});
    		});
	</script>
	
	<script type=text/javascript>
	function forwardFunction(){
		
		$.get("http://192.168.240.1/arduino/drive/forward/1");
  
	}
	</script>
	
	<script type=text/javascript>
	function stopFunction(){
	
		$.get("http://192.168.240.1/arduino/drive/stop/1");
  
	}
	</script>
	
	<script type=text/javascript>
	if (clicked_id =="1"{
	
		$.get("curl.php");
  
	}
	</script>
</head>

<body>
<!--<button class="relayButton" type="button" id="1" 
  onClick="buttonClick(this.id)">On</button>-->
  
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
    <td><button class ="button" id ="moveForward" type="button" onclick="forwardFunction()">Forward</button></td>		
    <td><button class ="button" id ="stop" onclick="stopFunction()">STOP</button></td>
  </tr>
  <tr>
    <td><button class ="button"  id ="turnLeft" onclick="leftFunction()">Turn Left</button></td>
    <td><button class ="button"  id ="moveBackwards" onclick="backwardsFunction()">Backwards</button></td>		
    <td><button class ="button" id ="turnRight" onclick="rightunction()">Turn Right</button></td>
  </tr>
  <tr>
    <td></td>
    <td><button class ="button" id ="turn180" onclick="180Function()">Turn 180</button></td>		
    <td></td>
  </tr>
</table>

<h1 class="title" id="UserVideo">User Video</h1>

	

	
</body>
</html>
