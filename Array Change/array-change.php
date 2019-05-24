<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 24.05.19
 * Time: 14:42
 */

/**
 * Find the minimal number of moves required to obtain a strictly increasing sequence from the input
 *
 * @param array[int] $inputArray
 * @return int
 */
function arrayChange(array $inputArray): int
{
    /** @var int $changes */
    $changes = 0;
    for ($i = 1, $len = count($inputArray); $i < $len; $i++) {
        if ($inputArray[$i] <= $inputArray[$i - 1]) {
            $changes += $inputArray[$i - 1] - $inputArray[$i] + 1;
            $inputArray[$i] = $inputArray[$i - 1] + 1;
        }
    }

    return $changes;
}

echo "<pre>arrayChange([1, 1, 1])\r\n";
var_dump(arrayChange([1, 1, 1])) ; // 3
echo "</pre>";

echo "<pre>arrayChange([-1000, 0, -2, 0])\r\n";
var_dump(arrayChange([-1000, 0, -2, 0])) ; // 5
echo "</pre>";

echo "<pre>arrayChange([3122, -645, 2616, 13213, -8069])\r\n";
var_dump(arrayChange([3122, -645, 2616, 13213, -8069])) ; // 25559
echo "</pre>";