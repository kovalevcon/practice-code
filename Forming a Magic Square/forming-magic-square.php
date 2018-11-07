<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 07.11.18
 * Time: 18:42
 */

/**
 * Find a minimal cost to covert array to a magic square function
 *
 * @param array $s
 * @return int
 */
function formingMagicSquare(array $s): int
{
    // Magic squares in line format
    $squares = [
        [8, 1, 6, 3, 5, 7, 4, 9, 2],
        [6, 1, 8, 7, 5, 3, 2, 9, 4],
        [4, 9, 2, 3, 5, 7, 8, 1, 6],
        [2, 9, 4, 7, 5, 3, 6, 1, 8],
        [8, 3, 4, 1, 5, 9, 6, 7, 2],
        [4, 3, 8, 9, 5, 1, 2, 7, 6],
        [6, 7, 2, 1, 5, 9, 8, 3, 4],
        [2, 7, 6, 9, 5, 1, 4, 3, 8],
    ];

    // Square to line format
    $s = array_merge($s[0], $s[1], $s[2]);

    $costs = [];
    $length = count($s);

    foreach ($squares as $square) {
        $cost = 0;

        for ($i = 0; $i < $length; $i++) {
            if ($s[$i] !== $square[$i]) {
                $cost += abs($s[$i] - $square[$i]);
            }
        }

        $costs[] = $cost;
    }

    return min($costs);
}

echo "<pre>formingMagicSquare([
           [5, 3, 4],
           [1, 5, 8],
           [6, 4, 2]
       ])\r\n";
echo formingMagicSquare([
    [5, 3, 4],
    [1, 5, 8],
    [6, 4, 2]
]); // 7
echo "</pre>";