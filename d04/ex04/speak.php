<?php
session_start();
function put_data_in_file($file)
{
    if (!file_exists($file))
    {
        $data[] = get_data_chat();
        file_put_contents($file, serialize($data));
    }
    else
    {
        $data = unserialize(file_get_contents($file));
        $data[] = get_data_chat();
        file_put_contents($file, serialize($data));
    }
}
function get_data_chat()
{
    $tab['login'] = $_SESSION['loggued_on_user'];
    $tab['msg'] = $_POST['msg'];
    $tab['time'] = time();
    return $tab;
}
if ($_SESSION['loggued_on_user'] != NULL )
{
	$path = "../private";
	if (!file_exists($path))
		mkdir($path);
    $file = $path."/"."chat";
    if (isset($_POST['msg']) && $_POST['msg'] != NULL)
        put_data_in_file($file);
?>
<html>
<head>
<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</head>
    <body>
        <form method="post" action="speak.php">
			<label for="msg"></label>
            <input type="text" name="msg" placeholder="message" style="width:500;height:30;">
            <input type="submit" name="send" value="send">
        </form>
    </body>
</html>
<?php
}
else
{
	header( "refresh:1;url=index.html" );
	echo "ERROR\n";
}
?>
