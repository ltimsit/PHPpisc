#!/usr/bin/php
<?php
$string = str_replace("\t", " ", $argv[1]);
$array = explode(" ", $string);
$array = array_filter($array);
foreach($array as $elem)
{
	echo "$elem";
	if ($elem != end($array))
	{
		echo " ";
	}
	else
		echo "\n";
}
?>
