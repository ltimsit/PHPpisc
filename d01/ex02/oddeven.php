#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$nb = trim(fgets(STDIN));
	if (feof(STDIN))
		exit("\n");
	if (!is_numeric($nb))
		echo "'$nb' n'est pas un chiffre\n";
	else if ($nb % 2)
		echo "Le chiffre $nb est Impair\n";
	else
		echo "Le chiffre $nb est Pair\n";
}
?>
