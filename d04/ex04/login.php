<?php
require "auth.php";
session_start();
if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd']))
{
	$_SESSION['loggued_on_user'] = $_POST['login'];
	?>
<html>
	<body>
		<iframe name="chat" height="550px" width="100%" src="chat.php"></iframe>
		<iframe name="speak" height="50px" width="100%" src="speak.php"></iframe>
		<form action="logout.php">
			<label for="logout">Deconnexion</label>
			<input type="submit" name="logout" value="Logout">
		</form>
	</body>
</html>
<?php
}
else
{
	$_SESSION['loggued_on_user'] = "";
	header( "refresh:1;url=index.html" );
    echo "ERROR\n";
}
?>
