#!/usr/bin/php
<?php

foreach ($argv as $elem)
{
	if (!($elem == $argv[0]))
	{
		$tab = explode(" ", $elem);
		$tab = array_filter($tab);
		foreach ($tab as $case)
			$array[] = $case;
	}
}
sort($array, SORT_FLAG_CASE | SORT_NATURAL);
foreach ($array as $printed)
{
	echo "$printed\n";
}
?>
