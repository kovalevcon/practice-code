<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 02.08.18
 * Time: 10:33
 */

/**
 * Birthday Chocolate function
 *
 * @param array $s
 * @param int $d
 * @param int $m
 * @return int
 */
// Complete the solve function below.
function solve(array $s, int $d, int $m): int
{
    for ($i = 0, $len = count($s), $result = 0; $i < $len; $i++) {
        $arr = array_slice($s, $i, $m);
        if (count($arr) == $m && array_sum($arr) == $d) {
            ++$result;
        }
    }

    return $result;
}

echo "<pre>solve([1, 2, 1, 3, 2], 3, 2)\r\n";
echo solve([1, 2, 1, 3, 2], 3, 2); // 2
echo "</pre>";