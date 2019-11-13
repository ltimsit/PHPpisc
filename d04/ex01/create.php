<?php
function get_data()
{
    if ($_POST['submit'] == "OK")
    {
        if ($_POST['login'] != NULL)
            $tab['login'] = $_POST['login'];
        if ($_POST['passwd'] != NULL)
            $tab['passwd'] = hash(sha512, $_POST['passwd']);
    }
    else
        exit("ERROR\n");
    return $tab;
}
$path = "../private";
$file = $path."/passwd";
$tab = get_data();
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
    foreach ($udata as $value)
    {
		foreach ($value as $key=>$login)
		{
			if ($key == "login" && $login == $tab['login'])
				exit("ERROR\n");
		}
	}
	$udata[] = $tab;
	$data = serialize($udata);
    file_put_contents($file, $data);
}
echo "OK\n";
?>