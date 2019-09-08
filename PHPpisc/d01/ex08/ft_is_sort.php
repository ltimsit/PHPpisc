#!/usr/bin/php
<?php
function ft_is_sort($arg)
{
	$sorted = $arg;
	sort($sorted);
	foreach ($arg as $key=>$value)
	{
		if ($value != $sorted[$key])
		{
			echo "le tableau n'est pas trie\n";
			exit(0);
		}
	}
	echo "Le tableau est trie\n";
}
?>
<?php
ft_is_sort($argv);
?>
