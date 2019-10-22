<?php
session_start();
include "ship_setup.php";
?>
<html>

<head>
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <form method="post" action="index.php">
        <label for="army">Choisissez votre armee</label>
        <input type="submit" name="army" value="Orcs">
        <input type="submit" name="army" value="Empire">
        <input type="submit" name="army" value="Chaos">
    </form>
    <?php
    if (isset($_POST['army']))
        $_SESSION['all_ships'] = serialize(set_ship());
    ?>
    <form method="post">
        <label for="ship">Choisissez votre vaisseau</label>
        <input type="submit" name="ship" value="0">
        <input type="submit" name="ship" value="1">
        <input type="submit" name="ship" value="2">
    </form>
    <div class="link_div">
        <?php
        if (array_key_exists('ship', $_POST)) {
            echo $_POST['ship'];
            $_SESSION['ship'] = unserialize($_SESSION['all_ships'])[intval($_POST['ship'])];
            echo "<img style='height:100%   ;' src=\"" . $_SESSION['ship']->getSprite() . "\">";
            $_SESSION['ship'] = serialize($_SESSION['ship']);
            echo "<form method='post' action='battle.php'><input type='submit' name='OK' value='battle'></form>";
            }
        ?>
    </div>
</body>

</html>