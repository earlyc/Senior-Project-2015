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
		<script src='js/lib/adapter.js'></script>
		<script>
			window.onbeforeunload = function(e) {
				return '';
			};
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
				<div>
					<button id="startButton">Start</button>
					<button id="callButton">Call</button>
					<button id="hangupButton">Hang Up</button>
				</div>
				<h1 class="box-title"> AVATAR Video </h1>
				<div id="AVATARVideoContainer">
					<video id="remoteVideo"></video>
				</div>
				<h1 class="box-title">User Video</h1>
				<div id="userVideoContainer">
					<video id="localVideo"></video>

					<script>
						var localStream, localPeerConnection, remotePeerConnection;
						
						var localVideo = document.getElementById("localVideo");
						var remoteVideo = document.getElementById("remoteVideo");
						
						var startButton = document.getElementById("startButton");
						var callButton = document.getElementById("callButton");
						var hangupButton = document.getElementById("hangupButton");
						startButton.disabled = false;
						callButton.disabled = true;
						hangupButton.disabled = true;
						startButton.onclick = start;
						callButton.onclick = call;
						hangupButton.onclick = hangup;
						
						function trace(text) {
						  console.log((performance.now() / 1000).toFixed(3) + ": " + text);
						}
						
						function gotStream(stream){
						  trace("Received local stream");
						  localVideo.src = URL.createObjectURL(stream);
						  localStream = stream;
						  callButton.disabled = false;
						}
						
						function start() {
						  trace("Requesting local stream");
						  startButton.disabled = true;
						  getUserMedia({audio:true, video:true}, gotStream,
						    function(error) {
						      trace("getUserMedia error: ", error);
						    });
						}
						
						function call() {
						  callButton.disabled = true;
						  hangupButton.disabled = false;
						  trace("Starting call");
						
						  if (localStream.getVideoTracks().length > 0) {
						    trace('Using video device: ' + localStream.getVideoTracks()[0].label);
						  }
						  if (localStream.getAudioTracks().length > 0) {
						    trace('Using audio device: ' + localStream.getAudioTracks()[0].label);
						  }
						
						  var servers = null;
						
						  localPeerConnection = new RTCPeerConnection(servers);
						  trace("Created local peer connection object localPeerConnection");
						  localPeerConnection.onicecandidate = gotLocalIceCandidate;
						
						  remotePeerConnection = new RTCPeerConnection(servers);
						  trace("Created remote peer connection object remotePeerConnection");
						  remotePeerConnection.onicecandidate = gotRemoteIceCandidate;
						  remotePeerConnection.onaddstream = gotRemoteStream;
						
						  localPeerConnection.addStream(localStream);
						  trace("Added localStream to localPeerConnection");
						  localPeerConnection.createOffer(gotLocalDescription,handleError);
						}
						
						function gotLocalDescription(description){
						  localPeerConnection.setLocalDescription(description);
						  trace("Offer from localPeerConnection: \n" + description.sdp);
						  remotePeerConnection.setRemoteDescription(description);
						  remotePeerConnection.createAnswer(gotRemoteDescription,handleError);
						}
						
						function gotRemoteDescription(description){
						  remotePeerConnection.setLocalDescription(description);
						  trace("Answer from remotePeerConnection: \n" + description.sdp);
						  localPeerConnection.setRemoteDescription(description);
						}
						
						function hangup() {
						  trace("Ending call");
						  localPeerConnection.close();
						  remotePeerConnection.close();
						  localPeerConnection = null;
						  remotePeerConnection = null;
						  hangupButton.disabled = true;
						  callButton.disabled = false;
						}
						
						function gotRemoteStream(event){
						  remoteVideo.src = URL.createObjectURL(event.stream);
						  trace("Received remote stream");
						}
						
						function gotLocalIceCandidate(event){
						  if (event.candidate) {
						    remotePeerConnection.addIceCandidate(new RTCIceCandidate(event.candidate));
						    trace("Local ICE candidate: \n" + event.candidate.candidate);
						  }
						}
						
						function gotRemoteIceCandidate(event){
						  if (event.candidate) {
						    localPeerConnection.addIceCandidate(new RTCIceCandidate(event.candidate));
						    trace("Remote ICE candidate: \n " + event.candidate.candidate);
						  }
						}
						
						function handleError(){}

					</script>
				</div>
			</div>
			<footer>
			
			</footer>
		</div>
	</body>
</html>
