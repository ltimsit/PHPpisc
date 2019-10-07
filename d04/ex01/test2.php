<?php
function fill_data($v1, $v2)
{
	$tab['login'] = $v1;
	$tab['passwd'] = $v2;
	return $tab;
}

$path = "private";
$file = $path."/passwd";
$tab = fill_data($argv[1], $argv[2]);
if (!file_exists($path))
{
	mkdir ($path);
}
if (!file_exists($file))
{
	$unserialized[] = $tab;
	$serialized[] = serialize($unserialized);
	file_put_contents($file, $serialized);
}
else
{
	$unserialized = unserialize(file_get_contents($file));
	foreach ($unserialized as $elem)
	{
		foreach ($elem as $login=>$value)
		{
			if ($value == $tab['login'])
			{
				echo "ERROR\n";
				exit();
			}
		}
	}
	$unserialized[] = $tab;
	$serialized = serialize($unserialized);
	file_put_contents($file, $serialized);
}
echo "OK\n";
?>
