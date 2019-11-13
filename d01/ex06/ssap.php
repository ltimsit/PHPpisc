#!/usr/bin/php
<?php

foreach ($argv as $elem)
{
	if (!($elem == $argv[0]))
	{
		$tab = explode(" ", trim($elem));
		$tab = array_filter($tab, 'strlen');
		foreach ($tab as $case)
			$array[] = $case;
	}
}
sort($array);
foreach ($array as $printed)
{
	echo "$printed\n";
}
?>
