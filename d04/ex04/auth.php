<?php
function auth($login, $passwd)
{
	$path = "../private/passwd";
	if (file_exists($path))
	{
		$tab = unserialize(file_get_contents($path));
		foreach ($tab as $elem)
		{
			if ($elem['login'] == $login && $elem['passwd'] == hash('sha512', $passwd))
				return (TRUE);
		}
	}
	return (FALSE);
}
?>
