<?php

Class Vector
{
    private $_x;
    private $_y;
    private $_z;
    private $_w;

    public function __construct(array $tab)
    {
        if (isset($tab['orig']))
            $og = $tab['orig'];
        else
            $og = new Color
            $xo = $tab['orig']->x;
            $yo = $tab['orig']->y;
            $zo = $tab['orig']->z;
            $wo = $tab['orig']->w;
        }
        if (isset($tab['dest']));
        {
            $this->_x = $tab['dest']->x;
        }
    }
    public function _x()
    {
        return $this->_x;
    }
    public function y()
    {
        return $this->y;
    }
    public function _z()
    {
        return $this->_z;
    }
    public function _w()
    {
        return $this->_w;
    }
}

?>