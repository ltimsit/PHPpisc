#!/usr/bin/php
<?php
$fd = fopen($argv[1], "r");
$tab = fgetcsv($fd);
while ($fd && ($line = fgets($fd)))
{
	$data_array[] = explode(";", $line);
}
?>
