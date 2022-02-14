<?php

require_once "Piece.php";
require_once "Square.php";


//creating a Board class
class Board
{
    public $columns = null;
    public function __construct($columns)
    {
        $this->columns = $columns;
    }

    public function gettingColumns()
    {

        //looping through all 8 columns
        foreach($this->columns as $column => $columnSquares) {
            
            //iterating 8 times and creating black and white squares
            for($i=1; $i<9; $i++) {
                $square = new Square($i, $column);
                
                //iterating through the provided column squares and adding the pieces on the corresponding squares
                foreach($columnSquares as $row => $value) {
                    if($row === $i) {
                        $square->piece = new Piece($value);
                    }
                }
                echo $square;
            }
        }
    }

    public function __toString()
    {
        return "<div>" . $this->gettingColumns() . "</div>";
    }
}