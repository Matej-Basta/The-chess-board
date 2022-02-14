<?php

class Board
{
    public $rows = null;
    public function __construct($rows)
    {
        $this->rows = $rows;
    }

    public function __toString()
    {
        return "<div class='board'>" . (foreach($this->rows as $row => $squares) {
            foreach($squares as $square) {
                $piece = new Square($)
            }
        })
    }
}