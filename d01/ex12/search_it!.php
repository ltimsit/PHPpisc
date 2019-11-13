#!/usr/bin/php
<?php
foreach ($argv as $key=>$elem)
{
	if ($key > 1)
	{
		$ex = explode(":", $elem);
		$array[$ex[0]] = $ex[1];
	}
}
$key = $argv[1];
if (($result = $array[$key]))
	echo "$result\n";
?>
