<?php
Class map
{
    private $_sizeX = 1500;
    private $_sizeY = 1000;
    private $_board;

    public function __construct($tab)
    {

    }
    public function addShip(object &$ship)
    {
        $coord = $ship->getPos();
        // $_board[$coord['y']][$coord['x']] = ;
    }
}
?>