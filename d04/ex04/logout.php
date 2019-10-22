<?php
session_start();
session_destroy();
file_put_contents("../private/chat", "");
header( "refresh:2;url=index.html" );
?>
<html>

<body>
	<div>Deconnexion ...</div>
</body>

</html>
