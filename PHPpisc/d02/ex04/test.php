#!/usr/bin/php
<?php
$ch = curl_init($argv[1]);
$fp = fopen('./flower.gif', 'wb');
curl_setopt($ch, CURLOPT_FILE, $argv[1]);
curl_setopt($ch, CURLOPT_HEADER, 0);
$x = curl_exec($ch);
curl_close($ch);
fclose($fp);
?>
