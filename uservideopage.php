<!-- Paul Bretanus, Christopher Early -->
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
		
			<div id="userVideoPageVideo">
				<h1 class="box-title" > User Video </h1> <!-- This was AVATAR Video -->
				<div id="AVATARVideoContainer">
				</div>
				<!--<h1 class="box-title">User Video</h1>-->
				<div id="userVideoContainer">
					<video style="display:block; margin: 0 auto; visibility: hidden;" id="localVideo" autoplay></video>
				</div>
			</div>
	</body>
</html>
