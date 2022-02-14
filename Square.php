<?php


//creating a Square class
class Square
{
    public $x_coord = null;
    public $y_coord = null;
    public $piece = null;

    public function __construct($x, $y, $piece = null)
    {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }

    public function isDark()
    {

        //function that returns true only if x and y coordinates are either even or odd
        if(($this->x_coord % 2 === 0 && $this->y_coord % 2 === 0) || ($this->x_coord % 2 === 1 && $this->y_coord % 2 === 1)) {
            return true;
        } else {
            return false;
        }
    }

    public function __toString()
    {
        return "<div class='". ($this->isDark() ?  "dark" : "light")  . "'>". $this->piece . "</div>";
    }
}