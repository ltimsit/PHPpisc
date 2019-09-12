#!/usr/bin/php
<?php
$string = file_get_contents($argv[1]);

function ft_toup($array)
{
	$string = $array[1].strtoupper($array[2]).$array[3];
	return $string;
}

$elem = preg_replace_callback("/(title=\")(.*)(\">)/", "ft_toup", $string);
$elem = preg_replace_callback("/(<a.*>)(.*)(\/a>)/", "ft_toup", $elem);
$elem = preg_replace_callback("/(<a.*>)(.*)(<img)/", "ft_toup", $elem);
echo "$elem";
?>
