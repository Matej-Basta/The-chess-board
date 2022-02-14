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

require_once "Board.php";

// function fen2array($fen)
// {
//     $parts = preg_split('#\s+#', $fen);
//     $rows = explode('/', $parts[0]);
 
//     $pieces = array();
 
//     $y = 8;
//     foreach ($rows as $row) {
//         $x = 1;
//         for ($i = 0; $i < strlen($row); $i++) {
//             if (is_numeric($row[$i])) {
//                 $x += intval($row[$i]);
//             } else {
//                 $pieces[$x][$y] = $row[$i];
//                 $x++;
//             }
//         }
//         $y--;
//     }
 
//     return $pieces;
// }

// $pieces_positions = fen2array('rnbqkbnr/pppppppp/8/8/4P3/8/PPPP1PPP/RNBQKBNR b KQkq e3');

// var_dump($pieces_positions);

//initializing a board object
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