#!/usr/bin/php
<?php
if (!($str = file_get_contents($argv[1])))
	exit();
preg_match_all("/(img.+src=\")([[:graph:]]+\/)([[:graph:]]+[\.png|\.jpg|\.gif])/", $x, $matches);
print_r($matches);
?>
