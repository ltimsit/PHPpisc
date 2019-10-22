<?php
Class weapon
{
    private $_name;
    private $_charge;
    private $_short_range;
    private $_medium_range;
    private $_long_range;

    public function __construct(array $tab)
    {
        if (isset($tab['name']) && isset($tab['ship']))
            $this->init_stats($tab['name'], $tab['ship']);
    }
    private function init_stats(string $name, object $ship)
    {
        if ($name = "Batteries laser de flancs")
            {
                $this->_name = $name;
                $this->_charge = 0;
                $this->_short_range = 10;
                $this->_medium_range = 20;
                $this->_long_range = 30;
            }
            // if ($name = "Batteries laser de flancs")
            // {
            //     $this->_charge = ;
            //     $this->_short_range = ;
            //     $this->_medium_range = ;
            //     $this->_long_range = ;
            // }
            // if ($name = "Batteries laser de flancs")
            // {
            //     $this->_charge = ;
            //     $this->_short_range = ;
            //     $this->_medium_range = ;
            //     $this->_long_range = ;
            // }
            // if ($name = "Batteries laser de flancs")
            // {
            //     $this->_charge = ;
            //     $this->_short_range = ;
            //     $this->_medium_range = ;
            //     $this->_long_range = ;
            // }
    }
}
?>