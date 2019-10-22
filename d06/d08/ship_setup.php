<?php
session_start();
include "Ship.class.php";
$lorc = new Ship(array('name' => "petit-bouzin", 'sprite' => "img/lorcs.jpg", 'type' => "little"));
$morc = new Ship(array('name' => "Boom-boom", 'sprite' => "img/morcs.jpeg", 'type' => "medium"));
$borc = new Ship(array('name' => "Boom-boom", 'sprite' => "img/borcs.png", 'type' => "big"));
$lempire = new Ship(array('name' => "Sword Of Absolution", 'sprite' => "img/lempire.jpg", 'type' => "little"));
$mempire = new Ship(array('name' => "Honorable Duty", 'sprite' => "img/mempire.jpg", 'type' => "medium"));
$bempire = new Ship(array('name' => "Hand Of The Emperor", 'sprite' => "img/bempire.jpeg", 'type' => "big"));
$lchaos = new Ship(array('name' => "petit-bouzin", 'sprite' => "img/lchaos.jpg", 'type' => "little"));
$mchaos = new Ship(array('name' => "petit-bouzin", 'sprite' => "img/mchaos.jpg", 'type' => "medium"));
$bchaos = new Ship(array('name' => "petit-bouzin", 'sprite' => "img/bchaos.jpg", 'type' => "big"));
function set_ship()
{
    if (isset($_POST['army'])) {
        global $lorc;
        global $morc;
        global $borc;
        global $lempire;
        global $mempire;
        global $bempire;
        global $lchaos;
        global $mchaos;
        global $bchaos;
        if ($_POST['army'] == "Orcs") {
            $little = $lorc;
            $medium = $morc;
            $big = $borc;
        }
        if ($_POST['army'] == "Empire") {
            $little = $lempire;
            $medium = $mempire;
            $big = $bempire;
        }
        if ($_POST['army'] == "Chaos") {
            $little = $lchaos;
            $medium = $mchaos;
            $big = $bchaos;
        }
        $_SESSION['army'] == $_POST['army'];
        echo "<div class=\"ship_show\"><img class=\"army_ship\" src=" . $little->getSprite() . ">";
        echo "<figcaption>" . $little->getName() . "</figcaption>";
        echo "<img class=\"army_ship\" src=" . $medium->getSprite() . ">";
        echo "<figcaption>" . $medium->getName() . "</figcaption>";
        echo "<img class=\"army_ship\" src=" . $big->getSprite() . ">";
        echo "<figcaption>" . $big->getName() . "</figcaption>";
        echo "</div>";
        return array($little, $medium, $big);
    }
}
function chose_ship(array $ships, string $type)
{
    if ($type == 'little')
    {
        $_SESSION['ship'] = serialize($ships[0]);
        return 'little';
    }
    if ($type == 'medium')
    {
        $_SESSION['ship'] = serialize($ships[1]);
        return 'medium';
    }
    if ($type == 'big')
    {
        $_SESSION['ship'] = serialize($ships[2]);
        return 'big';
    }
}
