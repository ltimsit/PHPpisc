<?php
$cmd = 0;
if ($_GET['action'] === true && $_GET['name'] === true)
{
	$cmd = $_GET['action'];
	if ($cmd == "set" && $_GET['value'] === true)
		setcookie($_GET['name'], $_GET['value'], (3600 * 24));
	if ($cmd == "get")
	{
		if ($_COOKIE[$_GET['name']] === true)
			echo $_COOKIE[$_GET['name']]."\n";
	}
	if ($cmd == "del")
		setcookie($_GET['name'], "", (3600 * 24));
}
?>
