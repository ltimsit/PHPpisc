<?php
class Ship
{
    private $_type;
    private $_name;
    private $_size;
    private $_sprite;
    private $_hull;
    Private $_pp;
    private $_speed;
    private $_inertia;
    private $_shield;
    private $_weapons;
    private $_position;
    private $_currPP;

    public function __construct(array $tab)
    {
        if(isset($tab['name']))
            $this->_name = $tab['name'];
        if(isset($tab['sprite']))
            $this->_sprite = $tab['sprite'];
        if(isset($tab['type']))
            $this->_type = $tab['type'];
        $this->init_stats($tab['type']);
        $this->_position = array('x' => 0, 'y' => 0);
    }
    private function init_stats(string $type)
    {
        if ($type == "little")
        {
            $this->_size = array('x' => 2, 'y' => 1);
            $this->_hull = 4;
            $this->_pp = 5;
            $this->_speed = 10;
            $this->_inertia = 2;
            $this->_shield = 10;
        }
        if ($type == "medium")
        {
            $this->_size = array('x' => 5, 'y' => 2);
            $this->_hull = 6;
            $this->_pp = 6;
            $this->_speed = 6;
            $this->_inertia = 5;
            $this->_shield = 13;
        }
        if ($type == "big")
        {
            $this->_size = array('x' => 10, 'y' => 4);
            $this->_hull = 10;
            $this->_pp = 6;
            $this->_speed = 2;
            $this->_inertia = 10;
            $this->_shield = 15;
        }
        $this->setCurrPP($this->_pp);
    }
    public function setCurrPP($val)
    {
        if ($val <= $this->_pp && $val >= 0)
            $this->_currPp = $val;
    }
    public function usePP($val)
    {
        if ($this->_currPP >= $val)
            $this->_currPP -= $val;
    }
    public function getSprite()
    {
        return $this->_sprite;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getPos()
    {
        return $this->_position;
    }
    public function getHull()
    {
        return $this->_hull;
    }
    public function getPp()
    {
        return $this->_pp;
    }
    public function getSpeed()
    {
        return $this->_speed;
    }
    public function getShield()
    {
        return $this->_shield;
    }
    public function setPos($x, $y)
    {
        $this->_position = array('x' => $x, 'y' => $y);
    }
}
?>