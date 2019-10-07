#!/usr/bin/php
<?php
$i = 0;
$ii = 0;
$iii = 0;
$j = 3;
$string = file_get_contents($argv[1]);
$fd = fopen("per.csv", "r");
while ($tab = fgetcsv($fd, $delimiter=","))
{
	$big[] = $tab;
}
$elem = preg_replace_callback("/([poids|nom|num]+)(\">)([[:graph:]]+)(<)/", "replace_name", $string);
file_put_contents("test2.html", $elem);
function replace_name($array)
{
	global $big;
	global $i;	
	global $ii;	
	global $iii;	
	global $j;
	switch ($array[1])
	{
		case "poids":
			$j = 3;
			$i++;
			$k = $i;
			break;
		case "nom":
			$j = 2;
			$ii++;
			$k = $ii;
			break;
		case "num":
			$j = 0;
			$iii++;
			$k = $iii;
			break;
	}
	$string = $array[1].$array[2].$big[$k][$j].$array[4];
	return $string;
}
?>
