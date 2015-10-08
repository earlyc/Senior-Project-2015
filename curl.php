<?php

$url = 'http://192.168.240.1/arduino/drive/forward/1';
$var = curl_init($url);
curl_exec($var);

?>