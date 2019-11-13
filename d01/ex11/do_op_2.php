#!/usr/bin/php
<?php
if ($argc != 2)
	exit ("Incorrect Parameters\n");
preg_match("/\+|-|\*|\/|%/", $argv[1], $matches);
$array = preg_split("/\+|-|\*|\/|%/", $argv[1]);
if (sizeof($array) != 2)
	exit ("Syntax error\n");
$param1 = trim($array[0]);
$param2 = trim($array[1]);
if (!is_numeric($param1) || !is_numeric($param2))
	exit ("Syntax error\n");
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
}
echo "$result\n";
?>
