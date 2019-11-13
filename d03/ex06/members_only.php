<?php
$data = NULL;
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	$data = base64_encode(file_get_contents("../img/42.png"));
	echo "<html><body>\nBonjour Zaz<br />\n";
	echo "<image src='data:image/jpeg;base64,".$data."'>\n</body></html>\n";
}
else
{
header('WWW-Authenticate: Basic realm="Espace membre"');
header('HTTP/1.0 401 Unauthorized');
?>
<html><body><div>Cette zone est accessible uniquement aux membres du site</div></body></html>
<?php
}
?>
