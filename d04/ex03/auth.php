<?php
function auth($login, $passwd)
{
	$path = "../ex01/private/passwd";
    $tab = unserialize($path);
    foreach ($path as $elem)
    {
        if ($elem['login'] == $login && $elem['passwd'] == hash(sha512, $passwd))
            return (TRUE);
    }
    return (FALSE);
}
?>