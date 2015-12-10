<!-- Khanh Le -->
<?php

$command = $_GET['command'];

if($command == 'moveForward') {
	$url = 'http://192.168.240.1/arduino/drive/forward/1';
}
else if($command == 'moveBackwards') {
	$url = 'http://192.168.240.1/arduino/drive/rev/1';
}
else if($command == 'stop') {
	$url = 'http://192.168.240.1/arduino/drive/stop/1';
}
else if($command == 'turnRight') {
	$url = 'http://192.168.240.1/arduino/turn/right/narrow/1';
}
else if($command == 'turnLeft') {
	$url = 'http://192.168.240.1/arduino/turn/left/narrow/1';
}
else if($command == 'turn180') {
	$url = 'http://192.168.240.1/arduino/yaw/cw/1';
}

$var = curl_init($url);
curl_exec($var);

return;

?>
