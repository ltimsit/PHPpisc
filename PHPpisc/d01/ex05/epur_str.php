#!/usr/bin/php
<?php
$elem = explode(" ", $argv[1]);
print_r($elem);
$elem = array_filter($elem);
print_r($elem);
foreach ($elem as $w)
{
	echo "$w";
	if (end($elem) == $w)
		echo "\n";
	else
		echo " ";
}

?>
