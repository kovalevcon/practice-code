<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 26.07.18
 * Time: 10:56
 */

/**
 * Count sum high and low records
 *
 * @param array $scores
 * @return array
 */
function breakingRecords(array $scores): array
{
    $min = $max = $scores[0];
    $sumHigh = $sumLow = 0;

    for($i = 1, $len = count($scores); $i < $len; $i++) {
        if ($scores[$i] > $max) {
            $max = $scores[$i];
            ++$sumHigh;
        }
        if ($scores[$i] < $min) {
            $min = $scores[$i];
            ++$sumLow;
        }
    }

    return [$sumHigh, $sumLow];
}

echo "<pre>breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1])\r\n";
var_dump(breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1]));
echo "</pre>";

echo "<pre>breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42])\r\n";
var_dump(breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42]));
echo "</pre>";
