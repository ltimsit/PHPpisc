#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre : ";
	$nb = trim(fgets(STDIN));
	if (feof(STDIN))
		exit();
	if (!is_numeric($nb))
		echo "\"$nb\" n'est pas un nombre\n";
	else if ($nb % 2)
		echo "le nombre \"$nb\" est impaire\n";
	else
		echo "le nombre \"$nb\" est paire\n";
}
?>
