#!/usr/bin/php
<?php
if ($argv[1])
{
	$str = trim($argv[1]);
	$str = preg_replace("/[ \t]+/", " ", $str);
	echo $str."\n";
}
?>
