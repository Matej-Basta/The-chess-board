<?php

require_once "Piece.php";
require_once "Square.php";

class Board
{
    public $columns = null;
    public function __construct($columns)
    {
        $this->columns = $columns;
    }

    public function gettingRows()
    {
        foreach($this->columns as $column => $columnSquares) {
            

            for($i=1; $i<9; $i++) {
                $square = new Square($i, $column);

                foreach($columnSquares as $row => $value) {
                    if($row === $i) {
                        $square->piece = new Piece($value);
                    }
                }
                echo $square;
            }

            // foreach($rowSquares as $column => $value) {
            // $piece = new Piece($value);
            // $square = new Square($row, $column, $piece);
            //    echo "<div>{$square}</div>";
            // }
            // return "<div>{$row}</div>";
        }
    }

    public function __toString()
    {
        return "<div>" . $this->gettingRows() . "</div>";
    }
}