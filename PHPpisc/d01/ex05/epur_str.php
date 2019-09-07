#!/usr/bin/php
<?php
$elem = explode(" ", $argv[1]);
$elem = array_filter($elem);
foreach ($elem as $w)
{
	echo "$w";
	if (end($elem) == $w)
		echo "\n";
	else
		echo " ";
}

?>
