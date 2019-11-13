#!/usr/bin/php
<?php
$array = explode(" ", trim($argv[1]));
$array = array_filter($array, 'strlen');
foreach ($array as $key=>$elem)
{
	if ($key != 0)
		echo "$elem ";
}
if (isset($array[0]))
	echo $array[0]."\n";
?>
