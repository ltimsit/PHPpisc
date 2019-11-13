#!/usr/bin/php
<?php
if (!($str = file_get_contents($argv[1])))
	exit();
preg_match_all("/(img.+src=['\"])([[:graph:]]+\/)([[:graph:]]+)[\"']/", $str, $matches);
$urltab = parse_url($argv[1], PHP_URL_HOST);
if (!file_exists($urltab))
	mkdir($urltab);
$i = 0;
while ($i < count($matches[2]))
{
	if (preg_match("/^https:\/\/.+/", $matches[2][$i]))
		$res = file_get_contents($matches[2][$i].$matches[3][$i]);
	else
		$res = file_get_contents("https://".$urltab.$matches[2][$i].$matches[3][$i]);
	file_put_contents($urltab.'/'.$matches[3][$i], $res);
	$i++;
}
?>
