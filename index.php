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
		  autoRequestMedia: true
		  });
		  // we have to wait until it's ready
		  
		  //url: 'http://192.168.1.122:8888/'
		  webrtc.on('readyToCall', function () {
		  // you can name it anything
		  webrtc.joinRoom('AVATAR');
		  });
      	</script>
		<script src="siteScript.js" type=text/javascript></script>
	</head>
	
	<body>
	
		<!-- Logout Link calls the script in logout.php; redirects user to login page -->
		
		
		<div id="wrap">
			<div id="header">
				<a class = "logout"  href="logout.php" > <b>Log Out</b> </a>
				<img src="avatar.png" />
				<table id="nav">
					<tr>
						<td><input class="button" type="image" src= "stop.png" id ="stop"></td>
						<td><input class="button" type="image" src="forward.png" id ="moveForward"></button></td>		
						<td><input class="button" type="image" src= "turn180.png" id ="turn180"></td>
					</tr>
					<tr>
						<td><input class="button" type="image" src= "turnleft.png" id ="turnLeft"></td>
						<td><input class="button" type="image" src= "backward.png" id ="moveBackwards"></td>		
						<td><input class="button"type="image" src= "turnright.png" id ="turnRight"></td>
					</tr>
							
				</table>	
			
			</div>
			
				
			<div id= "container">
			
			<div id="left">
				<h1 class="box-title"> AVATAR Video </h1>
				<div id="AVATARVideoContainer">
				</div>
			</div>
			
			<div id="right">		
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
			</div>
			<footer>
			
			</footer>
		</div>
	</body>
</html>
