<?php

$command = _GET['command'];

if($command == 'moveForward') {
	$url = 'http://192.168.240.1/arduino/drive/forward/1';
}
else if($command == 'moveForward') {
	$url = 'http://192.168.240.1/arduino/...'; //I don't know the REST commands here
}
else if($command == 'moveBackwards') {
	$url = 'http://192.168.240.1/arduino/...';
}
else if($command == 'stop') {
	$url = 'http://192.168.240.1/arduino/...';
}
else if($command == 'turnRight') {
	$url = 'http://192.168.240.1/arduino/...';
}
else if($command == 'turnLeft') {
	$url = 'http://192.168.240.1/arduino/...';
}
else if($command == 'turn180') {
	$url = 'http://192.168.240.1/arduino/...';
}

$var = curl_init($url);
curl_exec($var);

return;

?>