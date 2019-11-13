<?php

require_once("Vector.class.php");

class Matrix
{
    const IDENTITY = 'identity';
    const SCALE = 'scale';
    const RX = 'rx';
    const RY = 'ry';
    const RZ = 'rz';
    const TRANSLATION = 'translation';
    const PROJECTION = 'projection';

    public static $verbose = FALSE;
    private $_scale;
    private $_angle;
    private $_vtc;
    private $_fov;
    private $_ratio;
    private $_near;
    private $_far;

    private $_vtcX;
    private $_vtcY;
    private $_vtcZ;
    private $_vtxO;

    public function __construct(array $tab)
    {
        $type = NULL;
        if (isset($tab['preset']))
        {
            $this->_vtcX = new Vector(array('dest' => new Vertex(array('x' => 1.0, 'y' => 0.0, 'z' => 0.0, 'w' => 0.0))));
            $this->_vtcY = new Vector(array('dest' => new Vertex(array('x' => 0.0, 'y' => 1.0, 'z' => 0.0, 'w' => 0.0))));
            $this->_vtcZ = new Vector(array('dest' => new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 1.0, 'w' => 0.0))));
            $this->_vtxO = new Vertex(array('x' => 0.0, 'y' => 0.0, 'z' => 0.0));
            if ($tab['preset'] == self::SCALE && isset($tab['scale']))
            {
                $this->_vtcX = $this->vtcX->scalarProduct($tab['scale']);
                $this->_vtcY = $this->vtcY->scalarProduct($tab['scale']);
                $this->_vtcZ = $this->vtcZ->scalarProduct($tab['scale']);
            }
            if (($tab['preset'] == self::RX || $tab['preset'] == self::RY || $tab['preset'] == self::RZ) && isset($tab['angle']))
            {
                if ($tab['presset'] == self::RX)
                {
                $this->_angle = $tab['angle'];
                $this->_vtcY->_y(cos($tab['angle']));
                $this->_vtcY->_z(sin($tab['angle']));
                $this->_vtcZ->_y(-sin($tab['angle']));
                $this->_vtcZ->_z(cor($tab['angle']));
                }
            }
            if ($tab['preset'] == self::TRANSLATION && isset($tab['vtc']))
            {
                $this->_vtxO->setX($tab['vtc']->_x() + $this->_vtxO->_x());
                $this->_vtxO->setY($tab['vtc']->_y() + $this->_vtxO->_y());
                $this->_vtxO->setZ($tab['vtc']->_z() + $this->_vtxO->_z());
            }
            if ($tab['preset'] == self::PROJECTION && isset($tab['fov']))
                $this->_fov = $tab['fov'];
            if ($tab['preset'] == self::PROJECTION && isset($tab['ratio']))
                $this->_ratio = $tab['ratio'];
            if ($tab['preset'] == self::PROJECTION && isset($tab['near']))
                $this->_near = $tab['near'];
            if ($tab['preset'] == self::PROJECTION && isset($tab['far']))
                $this->_far = $tab['far'];
        }
        if (self::$verbose)
        {
            printf("M | vtcX | vtcY | vtcZ | vtx0\n-----------------------------\nx | %.2f | %.2f | %.2f | %.2f \ny | %.2f | %.2f | %.2f | %.2f \nz | %.2f | %.2f | %.2f | %.2f \nw | %.2f | %.2f | %.2f | %.2f \n", $this->_vtcX->_x(), $this->_vtcY->_x(), $this->_vtcZ->_x(), $this->_vtxO->_x()
            , $this->_vtcX->_y(), $this->_vtcY->_y(), $this->_vtcZ->_y(), $this->_vtxO->_y()
            , $this->_vtcX->_z(), $this->_vtcY->_z(), $this->_vtcZ->_z(), $this->_vtxO->_z()
            , $this->_vtcX->_w(), $this->_vtcY->_w(), $this->_vtcZ->_w(), $this->_vtxO->_w());
        }
    }
    public static function doc()
    {
        $str = file_get_contents("Matrix.doc.txt");
        if (is_string($str))
            echo $str."\n";
    }
}
