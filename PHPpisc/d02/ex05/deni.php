#!/usr/bin/php
<?php
$fd = fopen($argv[1], "r");
while ($fd && ($line = fgets($fd)))
{
	$data_array[] = explode(";", $line);
}
$header = $data_array[0];
$i = 0;
foreach ($header as $key=>$elem)
{
	$$elem = array();
	foreach ($data_array as $big)
	{
		$ind = $big[1];
		if ($i != array_key_last($big))
			$tmp[$ind] = $big[$i];
		else
			$tmp[$ind] = rtrim($big[$i]);
	}
	$i++;
	$$elem = $tmp;
}
$cmd = fgets(STDIN);
eval($cmd.";");
?>
