#!/usr/bin/php
<?php
$utmp = "/var/run/utmpx";
$fd = fopen($utmp, "r");
date_default_timezone_set("Europe/Paris");
while (($string = fread($fd, 628)))
{
	$e = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $string);
	if ($e[type] == "7")
	{
		$date = date("D j H:i", $e[time1]);
		echo "$e[user]  $e[line]  $date\n";
	}
}
?>
