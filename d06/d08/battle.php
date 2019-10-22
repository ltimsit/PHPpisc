<?php
session_start();
include "ship_setup.php";
if (isset($_SESSION['ship']))
    $ship = unserialize($_SESSION['ship']);
?>
<html>

<head>
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div style="display:flex;">
        <div style="width:550;height:auto;">
            <?php
            echo "<img class=\"battle_ship\" src=\"" . $ship->getSprite() . "\">";
            ?>

            <p>
                Name : <?php echo $ship->getName() ?><br>
                Hull : <?php echo $ship->getHull() ?><br>
                pp : <?php echo $ship->getPp() ?><br>
                speed : <?php echo $ship->getSpeed() ?><br>
                shield : <?php echo $ship->getShield() ?><br>
                <br>
            </p>
        </div>
        <iframe id="iframe_map" src="map.php" frameborder="1" height="1320" width="1980px"></iframe>
    </div>
</body>

</html>