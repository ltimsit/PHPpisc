#!/usr/bin/php
<?php
$string = str_replace(":", " ", $argv[1]);
$array = explode(" ",$string);
$array = array_filter($array);
$curr = next($array);
$day = $curr;
$curr = next($array);
$curr = strtolower($curr);
switch ($curr)
{
case "janvier":
	$month = 1;
	break;
case "fevrier":
	$month = 2;
	break;
case "mars":
	$month = 3;
	break;
case "avril":
	$month = 4;
	break;
case "mai":
	$month = 5;
	break;
case "juin":
	$month = 6;
	break;
case "juillet":
	$month = 7;
	break;
case "aout":
	$month = 8;
	break;
case "septembre":
	$month = 9;
	break;
case "octobre":
	$month = 10;
	break;
case "novembre":
	$month = 11;
	break;
case "decembre":
	$month = 12;
	break;
default :
	$month = 0;
	break;
}
$curr = next($array);
$year = $curr;
$curr = next($array);
$hour = $curr;
$curr = next($array);
$min = $curr;
$curr = next($array);
$sec = $curr;
date_default_timezone_set("Europe/Paris");
$time = mktime($hour, $min, $sec, $month, $day, $year);
echo "$time\n";
?>
