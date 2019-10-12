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
        if (isset($tab['x']) && isset($tab['y']) && isset($tab['z']))
        {
            $this->_x = $tab['x'];
            $this->_y = $tab['y'];
            $this->_z = $tab['z'];
            if (isset($tab['w']))
                $this->_w = $tab['w'];
            else
                $this->_w = 1.0;
            if (isset($tab['color']))
                $this->_color = $tab['color'];
            else
                $this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
        }
        if (self::$verbose)
        {
            printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) constructed.\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
        }
    }
    public function __destruct()
    {
        if (self::$verbose)
            printf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f, %s ) destructed.\n", $this->_x, $this->_y, $this->z, $this->w, $this->_color);
    }
    public function __toString()
    {
        if (self::$verbose && $this->_color)
            $end = sprintf(", %s )", $this->_color);
        else
            $end = " )";
        $return = sprintf("Vertex( x: %.2f, y: %.2f, z: %.2f, w: %.2f", $this->_x, $this->_y, $this->_z, $this->_w).$end;
        return $return;
    }
    public static function doc()
    {
        $data = file_get_contents("Vertex.doc.txt");
        echo $data."\n";
    }
}

?>