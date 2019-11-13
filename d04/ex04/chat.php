<?php
date_default_timezone_set('Europe/Paris');
$path = "../private/chat";
if (file_exists($path))
{
	$bdata = unserialize(file_get_contents($path));
if (is_array($bdata))
{
foreach ($bdata as $data)
{
if (isset($data['login']) && $data['login'] != NULL && isset($data['msg']) && $data['msg'] != NULL && isset($data['time']))
{
    ?>
    <html>
        <body>
    <?php
    echo "<div>";
    echo "<b>".$data['login']."</b>".": ";
    echo $data['msg']."  ";
    echo "<span style=\"float:right;\">[".date("h:i", $timestamp=$data['time'])."]</span>"."</div>"."</br>";
    ?>
    </body>
</html>
<?php
}
else
{
	header( "refresh:1;url=index.html" );
	echo "ERROR\n";
}
}
}
}
?>
