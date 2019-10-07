#!/usr/bin/php
<?php
function fill_data($v1, $v2)
{
	$tab['login'] = $v1;
	$tab['passwd'] = hash(sha512, $v2);
	return $tab;
}

$path = "private";
$file = $path."/passwd";
$tab = fill_data($argv[1], $argv[2]);
if (file_exists($path) === false)
    mkdir($path);
if (!file_exists($file))
    {
		$ser[] = $tab;
        file_put_contents($file, serialize($ser));
    }
else
{
    $data = file_get_contents($file);
	$udata = unserialize($data);
	print_r($udata);
    foreach ($udata as $value)
    {
		foreach ($value as $key=>$login)
		{
			if ($key == "login" && $login == $tab['login'])
				exit("EROOR\n");
		}
	}
	$udata[] = $tab;
	print_r($udata);
	$data = serialize($udata);
    file_put_contents($file, $data);
}
?>
