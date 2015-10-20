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
		
		<script src="jquery-2.1.4.js" type=text/javascript></script>
		<script src="siteScript.js" type=text/javascript></script>
		
	</head>
	
	<body>
	
		<!-- Logout Link calls the script in logout.php; redirects user to login page -->
		<a class = "logout"  href="logout.php" > <b>Log Out</b> </a>
		
		<div id="wrap">
			<header>
				<img src="avatar.png" />
			</header>
			<div id="left">
				<h1 class="box-title"> Movement Control</h1>
				<table id="AVATARMovementControls">
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
			</div>
			<div id="right">
				<h1 class="box-title"> AVATAR Video </h1>
				<div id="AVATARVideoContainer">
				</div>
				<h1 class="box-title">User Video</h1>
				<div id="userVideoContainer">
					<video id="userVideo" autoplay></video>
					<script>
						window.onbeforeunload = function(e) {
						return '';
						};
					</script>
					<script>
						var errorCallback = function(e) {
							console.log('Callback Error', e);
						};
					
						navigator.getUserMedia  = navigator.getUserMedia ||
							navigator.webkitGetUserMedia ||
							navigator.mozGetUserMedia ||
							navigator.msGetUserMedia;
					
						var video = document.querySelector('video');
					
						if (navigator.getUserMedia) {
							navigator.getUserMedia({audio: true, video: true}, function(stream) {
								video.src = window.URL.createObjectURL(stream);
							}, errorCallback);
						} else {
							video.src = '#'; // fallback.
						}
						video.onloadedmetadata = function(e) {
							//do other stuff once video is loaded
						};
					</script>
				</div>
			</div>
			<footer>
			
			</footer>
		</div>
	</body>
</html>
