#!/usr/bin/php
<?php
function ft_split($string)
{
	$tab = explode(" ", $string);
	if ($tab)
		sort($tab);
	return ($tab);
}
?>
<?php
print_r(ft_split("hhhee   tss AAAA"));
?>
