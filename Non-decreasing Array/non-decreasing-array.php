<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 07.06.19
 * Time: 17:51
 */

/**
 * Check if it could become non-decreasing by modifying at most 1 element in array of integers
 *
 * @param Integer[] $nums
 * @return Boolean
 */
function checkPossibility(array $nums): bool
{
    $pos = null;
    $length = count($nums);
    for ($i = 0; $i < $length - 1; $i++) {
        if ($nums[$i] > $nums[$i + 1]) {
            if (!is_null($pos)) {
                return false;
            }
            $pos = $i;
        }
    }

    return (is_null($pos) || $pos === 0 || $pos === $length - 2 ||
        $nums[$pos - 1] <= $nums[$pos + 1] || $nums[$pos] <= $nums[$pos + 2]);
}

echo "<pre>checkPossibility([4, 2, 3])\r\n";
var_dump(checkPossibility([4, 2, 3])); // true
echo "</pre>";

echo "<pre>checkPossibility([4, 2, 1])\r\n";
var_dump(checkPossibility([4, 2, 1])); // true
echo "</pre>";