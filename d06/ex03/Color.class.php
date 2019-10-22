<?php

class Color
{
    public $red;
    public $green;
    public $blue;
    public static $verbose = FALSE;
    public function __construct(array $color)
    {
        if (isset($color['rgb']))
        {
            $this->red = intval(($color['rgb'] >> 16) & 255);
            $this->green = intval(($color['rgb'] >> 8) & 255);
            $this->blue = intval(($color['rgb']) & 255);
        }
        else if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
        {
            $this->red = intval($color['red']);
            $this->green = intval($color['green']);
            $this->blue = intval($color['blue']);
        }
        if (self::$verbose)
        {
            printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.r\n", $this->red, $this->green, $this->blue);
        }
    }
    public function __destruct()
    {
        if (self::$verbose)
        {
            printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
        }
    }
    public function __toString()
    {
        return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);   
    }
    public static function doc()
    {
        $data = file_get_contents("Color.doc.txt");
        echo $data."\n";
    }
    public function add($new_color)
    {
        return (new Color(array('red' => $this->red + $new_color->red,
        'green' => $this->green + $new_color->green,
        'blue' => $this->blue + $new_color->blue)));
    }
    public function sub($new_color)
    {
        return (new Color(array('red' => $this->red - $new_color->red,
        'green' => $this->green - $new_color->green,
        'blue' => $this->blue - $new_color->blue)));
    }
    public function mult($mult)
    {
        return (new Color(array('red' => $this->red * $mult,
        'green' => $this->green * $mult,
        'blue' => $this->blue * $mult)));
    }
}

?>