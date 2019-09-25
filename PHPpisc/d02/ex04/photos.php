#!/usr/bin/php
<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$x = curl_exec($ch);
//echo "$x";
$urltab = parse_url($argv[1], PHP_URL_HOST);
//print_r($urltab);
preg_match_all("/(img.+src=\")([[:graph:]]+\/)([[:graph:]]+[\.png|\.jpg|\.gif])/", $x, $matches);
print_r($matches[0]);
curl_close($ch);
if (!file_exists($urltab))
	mkdir($urltab);
$i = 0;
while ($i < count($matches[2]))
{
	$ch = curl_init();
	$fd = fopen($urltab . "/" . $matches[3][$i], "wb");
    $headers[] = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';              
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
//	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FILE, $fd);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_URL, $urltab . $matches[2][$i] . $matches[3][$i]);
//	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
	curl_close($ch);
	fclose($fd);
	$i++;
}
?>
