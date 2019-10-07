#!/usr/bin/php
<?php
$delim1 = $argv[2];
$delim2 = $argv[3];
$color = $argv[4];
$string = file_get_contents($argv[1]);
//$elem = preg_replace_callback("/(td class=\")([[:graph:]]+)(\"><p[[:print:]]+)(class = \"num\">)([[:graph:]]+)(<)/", "replace_name", $string);
$elem = preg_replace_callback("/(td class=\")([[:alpha:]]+)([[:print:]]+)(num\">)([[:digit:]]+)(<)/", "replace_name", $string);
file_put_contents("test2.html", $elem);
function replace_name($array)
{
	global $delim1;
	global $delim2;
	global $color;
	$elem = (int)$array[5];
	if ($elem >= $delim1 && $elem <= $delim2)
	{
		$data = $color;
	}
	else
		$data = $array[2];
//	$string = $array[1].$data.$array[3].$array[4].$array[5].$array[6];
	$string = $array[1].$data.$array[3].$array[4].$array[5].$array[6];
	return $string;
}
?>
