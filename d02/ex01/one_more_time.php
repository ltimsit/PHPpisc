#!/usr/bin/php
<?PHP
if ($argc < 2)
	return ;
$tab = explode(' ', preg_replace('/\s+/', ' ', trim($argv[1])));
$english_days = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$french_days = array('/[lL]undi/', '/[mM]ardi/', '/[mM]ercredi/', '/[jJ]eudi/', '/[vV]endredi/', '/[sS]amedi/', '/[dD]imanche/');
$english_months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$french_months = array('/[jJ]anvier/', '/[fF][e|é]vrier/u', '/[mM]ars/', '/[aA]vril/', '/[mM]ai/', '/[jJ]uin/', '/[jJ]uillet/', '/[aA]o[uû]t/u', '/[sS]eptembre/', '/[oO]ctobre/', '/[nN]ovembre/', '/[dD][eé]cembre/u');
date_default_timezone_set("Europe/Paris");
$count_days = 0;
$count_months = 0;
$result = strtotime(preg_replace($french_days, $english_days, preg_replace($french_months, $english_months, $argv[1], -1, $count_months), -1, $count_days));
if (!$result || $count_days != 1 || $count_months != 1 || $tab[1] < 1)
	echo "Wrong Format\n";
else
	echo $result."\n";
?>
