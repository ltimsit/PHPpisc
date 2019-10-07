<html>
<body>
<?php
$data = NULL;
if ($_SERVER['PHP_AUT_USER'] == 'zaz' && $_SERVER['PHP_AUT_PW'] == "jaimelespetitsponeys")
{
	$data = base64_encode(file_get_contents("../img/42.png"));
	echo "<image src='data:image/jpeg;base64,".$data."'>";
}
else
{
?>
<div>Zone reserve aux abonnes</div>
<?php
}
?>
</body>
</html>
