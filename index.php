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
		<script>
			window.onbeforeunload = function(e) {
				return '';
			};
		</script>
		<script src="simplewebrtc.js"></script>
    	<script>
		  var webrtc = new SimpleWebRTC({
		  // the id/element dom element that will hold "our" video
		  localVideoEl: 'localVideo',
		  // the id/element dom element that will hold remote videos
		  remoteVideosEl: 'AVATARVideoContainer',
		  // immediately ask for camera access
		  autoRequestMedia: true,
		  url: 'http://192.168.1.122:8888/'
		  });
		  // we have to wait until it's ready
		  webrtc.on('readyToCall', function () {
		  // you can name it anything
		  webrtc.joinRoom('AVATAR');
		  });
      	</script>
		
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
					<div>
						<button id="startButton">Start</button>
						<button id="stopButton">Stop</button>
						<button id="muteButton">Mute</button>
					</div>
					<video id="localVideo" autoplay></video>
				</div>
			</div>
			<footer>
			
			</footer>
		</div>
	</body>
</html>
