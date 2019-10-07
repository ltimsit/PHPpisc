<?php
function get_data()
{
    if ($_POST['submit'] == 'OK')
    {
        $tab['login'] = $_POST['login'];
        $tab['oldpw'] = hash(sha512, $_POST['oldpw']);
        $tab['newpw'] = hash(sha512, $_POST['newpw']);
    }
    else
        exit("ERROR\n");
    return $tab;
}
echo "TEST\n";
$path = "../ex01/private";
$file = $path."/passwd";
$user_info = get_data()
$data = file_get_contents($file);
$tab = unserialize($data);
$ok = 0;
foreach ($tab as $user)
{
    if ($user['login'] == $user_info['login'] && $user['passwd'] == $user_info['oldpw'])
    {
        $user['passwd'] = $user_info['newpw'];
        $ok = 1;
        break;
    }
}
if (!$ok)
    exit("ERROR\n");
$tab = serialize($tab);
file_put_contents($file, $tab);
?>