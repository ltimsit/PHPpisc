#!/usr/bin/php
<?php
if ($argc != 2)
	exit ("incorrect number of parameters\n");
preg_match("/\+|-|\*|\/|%/", $argv[1], $matches);
$array = preg_split("/\+|-|\*|\/|%/", $argv[1]);
if (sizeof($array) != 2)
	exit ("Syntax error\n");
$param1 = $array[0];
$param2 = $array[1];
if (strcmp(rtrim($param1), $param1)
	xor strcmp(ltrim($param2), $param2))
	exit("Syntax error\n");
$param1 = trim($param1);
$param2 = trim($param2);
switch ($matches[0])
{
case "+":
	$result = $param1 + $param2;
	break;
case "-":
	$result = $param1 - $param2;
	break;
case "*":
	$result = $param1 * $param2;
	break;
case "/":
	$result = $param1 / $param2;
	break;
case "%":
	$result = $param1 % $param2;
	break;
default:
	exit("wrong operator parameter");

}
echo "$result\n";
?>
