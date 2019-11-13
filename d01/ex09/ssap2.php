#!/usr/bin/php
<?php
function ft_cmp($a, $b)
{
	$lena = strlen($a);
	$lenb = strlen($b);
	$i = 0;
	while ($i < $lena && $i < $lenb)
	{
		if (ctype_alpha($a[$i]))
			$ta = 1;
		else if (ctype_digit($a[$i]))
			$ta = 2;
		else
			$ta = 3;
		if (ctype_alpha($b[$i]))
			$tb = 1;
		else if (ctype_digit($b[$i]))
			$tb = 2;
		else
			$tb = 3;
		if ($ta != $tb)
			return ($ta - $tb);
		else if ($a[$i] != $b[$i])
			return strcasecmp($a[$i], $b[$i]);
		$i++;
	}
	if ($lena < $lenb)
		return 1;
	else if ($lena > $lenb)
		return -1;
	else
		return 0;
}
$big = array();
foreach ($argv as $key=>$elem)
{
	if ($key)
	{
		$tab = explode(" ", trim($elem));
		$tab = array_filter($tab, 'strlen');
		$big = array_merge($big, $tab);
	}
}
usort($big, 'ft_cmp');
foreach ($big as $data)
{
	echo $data."\n";
}
?>
