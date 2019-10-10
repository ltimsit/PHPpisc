<?php

include_once("Color.class.php");

Class Vertex
{
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    private $_color;
    public static $verbose = FALSE;

    public function __construct($tab)
    {
        if (isset(tab['x']) && isset(tab['y']) && isset(tab['z']) && isset(tab['w']))
        {
            $this->_x = tab['x'];
            $this->_x = tab['y'];
            $this->_x = tab['z'];
            $this->_x = tab['w'];
            if (isset($tab['color']))
                $this->_x = tab['color'];
            else
                $this->color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        }
        if (self::verbose)
            printf("Vertex( x: %d, y: %d, z: %d, w: %d, %s ) constructed.", $this->x, $this->y, $this->z, $this->w, $this->color);
    }
}

?>