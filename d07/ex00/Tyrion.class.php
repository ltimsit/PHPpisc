<?php
class Tyrion extends Lannister
{
    public function __construct()
    {
        parrent::__construct();
        print("My name is Tyrion" . PHP_EOL);
    }
    public function getSize()
    {   
        return "Short";
    }
}
?>