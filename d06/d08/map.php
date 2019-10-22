<?php
session_start();
include "Ship.class.php";
?>
<head>
    <link href="index.css" rel="stylesheet">
</head>
<html>
    <body>
    <div>
<?php
if (isset($_SESSION['ship']))
{
        $player_ship = unserialize($_SESSION['ship']);
}
function aff_player_ship($ship)
{
    echo "<img src=\"".$ship->getSprite()."\" class =\"ship\">";
}
       $sizeY = 100;
       echo "<table>";
       aff_player_ship($player_ship);
       while ($j++ < $sizeY)
       {
            $i = 0;
            $sizeX = 150;
            echo "<tr class=\"block\">";
            while ($i++ < $sizeX)
            {
                echo "<td></td>";
            }
            echo "</tr>";
       }
       echo "</table>";

?>            
        </div>
    </body>
</html>