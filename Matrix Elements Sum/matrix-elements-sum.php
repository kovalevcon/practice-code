<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 26.10.18
 * Time: 12:50
 */

/**
 * Matrix elements summary function
 *
 * @param array $matrix
 * @return int
 */
function matrixElementsSum(array $matrix): int
{
    $summary = array_sum($matrix[0]);
    $rowLength = count($matrix);
    $elemLength = count($matrix[0]);

    for ($i = 1; $i < $rowLength; $i++) {
        for ($j = 0; $j < $elemLength; $j++) {
            if ($matrix[$i - 1][$j] === 0) {
                $matrix[$i][$j] = 0;
            }
        }
        $summary += array_sum($matrix[$i]);
    }

    return $summary;
}

echo "<pre>matrixElementsSum([
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
])\r\n";
echo matrixElementsSum([
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
]); // 9
echo "</pre>";

echo "<pre>matrixElementsSum([
    [1, 1, 1, 0],
    [0, 5, 0, 1],
    [2, 1, 3, 10]
])\r\n";
echo matrixElementsSum([
    [1, 1, 1, 0],
    [0, 5, 0, 1],
    [2, 1, 3, 10]
]); // 9
echo "</pre>";