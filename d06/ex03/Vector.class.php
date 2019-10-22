<?php

require_once('Vertex.class.php');

class Vector
{
    private $_x;
    private $_y;
    private $_z;
    private $_w;
    public static $verbose = FALSE;

    public function __construct(array $tab)
    {
        if (isset($tab['dest']) && $tab['dest'] instanceof Vertex) {
            if (isset($tab['orig']) && $tab['orig'] instanceof Vertex)
                $og = $tab['orig'];
            else
                $og = new Vertex(array('x' => 0, 'y' => 0, 'z' => 0, 'w' => 1));
            $dst = $tab['dest'];
            $this->_x = $dst->_x() - $og->_x();
            $this->_y = $dst->_y() - $og->_y();
            $this->_z = $dst->_z() - $og->_z();
            $this->_w = 0.0;
        }
        if (self::$verbose)
            printf("Vector( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f ) constructed.\n", $this->_x, $this->_y, $this->_z, $this->_w);
    }
    public function __destruct()
    {
        if (self::$verbose)
            printf("Vector( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f ) destructed.\n", $this->_x, $this->_y, $this->_z, $this->_w);
    }
    public function __toString()
    {
        return (sprintf("Vector( x: %3.2f, y: %3.2f, z: %3.2f, w: %3.2f )", $this->_x, $this->_y, $this->_z, $this->_w));
    }
    public static function doc()
    {
        $data = file_get_contents("Vector.doc.txt");
        echo $data."\n";
    }
    public function _x()
    {
        return $this->_x;
    }
    public function _y()
    {
        return $this->_y;
    }
    public function _z()
    {
        return $this->_z;
    }
    public function _w()
    {
        return $this->_w;
    }
    public function magnitude()
    {
        return  (sqrt(pow($this->_x, 2) + pow($this->_y, 2) + pow($this->_z, 2)));
    }
    public function normalize()
    {
        $mag = $this->magnitude();
        return (new Vector(array('dest' => new Vertex(array('x' => $this->_x / $mag, 'y' => $this->_y / $mag, 'z' => $this->_z / $mag)))));
    }
    public function add(Vector $rhs)
    {
        $new_x = $this->_x + $rhs->_x();
        $new_y = $this->_y + $rhs->_y();
        $new_z = $this->_z + $rhs->_z();
        return (new Vector(array('dest' => new Vertex(array('x' => $new_x, 'y' => $new_y, 'z' => $new_z)))));

    }
    public function sub(Vector $rhs)
    {
        $new_x = $this->_x - $rhs->_x();
        $new_y = $this->_y - $rhs->_y();
        $new_z = $this->_z - $rhs->_z();
        return (new Vector(array('dest' => new Vertex(array('x' => $new_x, 'y' => $new_y, 'z' => $new_z)))));

    }
    public function opposite()
    {
        return (new Vector(array('dest' => new Vertex(array('x' => -$this->_x, 'y' => -$this->_y, 'z' => -$this->_z)))));
    }
    public function scalarProduct($k)
    {
        return (new Vector(array('dest' => new Vertex(array('x' => $this->_x * $k, 'y' => $this->_y * $k, 'z' => $this->_z * $k)))));
    }
    public function dotProduct(Vector $rhs)
    {
        return ($this->_x * $rhs->_x + $this->_y * $rhs->_y + $this->_z * $rhs->_z);
    }
    public function cos(Vector $rhs)
    {
        return ($this->dotProduct($rhs) / ($this->magnitude() * $rhs->magnitude()));
    }
    public function crossProduct(Vector $rhs)
    {
        $new_x = $this->_y * $rhs->_z() - $this->_z * $rhs->_y();
        $new_y = $this->_z * $rhs->_x() - $this->_x * $rhs->_z();
        $new_z = $this->_x * $rhs->_y() - $this->_y * $rhs->_x();
        return (new Vector(array('dest' => new Vertex(array('x' => $new_x, 'y' => $new_y, 'z' => $new_z)))));
    }
}