<?php
$cmd = 0;
if (isset($_GET['action']) && isset($_GET['name']))
{
	$cmd = $_GET['action'];
	if ($cmd == "set" && isset($_GET['value']))
	{
		setcookie($_GET['name'], $_GET['value'], time()+(3600 * 24));
	}
	if ($cmd == "get")
	{
		if (isset($_COOKIE[$_GET['name']]))
			echo $_COOKIE[$_GET['name']]."\n";
	}
	if ($cmd == "del")
		setcookie($_GET['name'], "", -1);
}
?>
