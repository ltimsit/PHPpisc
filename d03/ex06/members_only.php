<?php
$data = NULL;
if ($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	$data = base64_encode(file_get_contents("../img/42.png"));
	echo "Bonjour Zaz<br />";
	echo "<html><body><image src='data:image/jpeg;base64,".$data."'></body></html>";
}
else
{
header('WWW-Authenticate: Basic realm="Espace membre"');
?>
<html>
<body>
<div>Cette zone est accessible uniquement aux membres du site</div>
</body>
</html>
<?php
}
?>
