<?php
function ft_split($string)
{
	$tab = explode(" ", trim($string));
	$tab = array_filter($tab, 'strlen');
	if ($tab)
		sort($tab);
	return ($tab);
}
?>
