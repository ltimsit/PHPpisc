<?php
function exit_err()
{
		header( "refresh:1;url=index.html" );
		exit("ERROR\n");
}
function get_data()
{
    if ($_POST['submit'] == 'OK')
    {
        $tab['login'] = $_POST['login'];
        $tab['oldpw'] = hash(sha512, $_POST['oldpw']);
        $tab['newpw'] = hash(sha512, $_POST['newpw']);
    }
    else
		exit_err();
    return $tab;
}
$path = "../private";
$file = $path."/passwd";
$user_info = get_data();
$ok = 0;
if (file_exists($file))
{
	$data = file_get_contents($file);
	$tab = unserialize($data);
	$i = 0;
	foreach ($tab as $user)
	{
		if ($user['login'] == $user_info['login'] && $user['passwd'] == $user_info['oldpw'])
		{
			$tab[$i]['passwd'] = $user_info['newpw'];
			$ok = 1;
			break;
		}
		$i++;
	}
}
if (!$ok)
	exit_err();
$tab = serialize($tab);
file_put_contents($file, $tab);
header("Location:index.html");
?>
