#!/usr/bin/php
<?php
$array = explode(" ", $argv[1]);
$array = array_filter($array);
$array = array_reverse($array);

foreach ($array as $elem)
{
	echo "$elem";
	if ($elem != end($array))
		echo " ";
	else
		echo "\n";
}
?>
