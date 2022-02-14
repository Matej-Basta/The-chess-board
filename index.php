<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php

require_once "Piece.php";
require_once "Square.php";
require_once "Board.php";

$black_pawn = new Piece('p');
$white_queen = new Piece('Q');


$a2 = new Square(1, 2);
$b2 = new Square(2, 2, $white_queen);
$c2 = new Square(3, 2, $black_pawn);
$d2 = new Square(4, 2);
// echo $a2;
// echo $b2;
// echo $c2;
// echo $d2;

$board = new Board([
    1 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
    2 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    3 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    4 => [8 => 'q', 7 => 'p', 2 => 'P', 1 => 'Q'],
    5 => [8 => 'k', 7 => 'p', 4 => 'P', 1 => 'K'],
    6 => [8 => 'b', 7 => 'p', 2 => 'P', 1 => 'B'],
    7 => [8 => 'n', 7 => 'p', 2 => 'P', 1 => 'N'],
    8 => [8 => 'r', 7 => 'p', 2 => 'P', 1 => 'R'],
]);

echo "<div class='board'>";
echo $board;
echo "</div>";



?>