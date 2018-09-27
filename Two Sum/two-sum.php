<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.09.18
 * Time: 12:39
 */

/**
 * Find index in array to sum two element equals target
 *
 * @param array $arr
 * @param int $target
 * @return array
 */
function twoSum(array $arr, int $target): array
{
    for($i = 0, $j = 1, $length = count($arr); $i < $length; $i++, $j++) {
        if ($arr[$i] + $arr[$j] == $target) {
            return [$i, $j];
        }
    }

    return [];
}

echo "<pre>twoSum([2, 7, 11, 15], 9)\r\n";
var_dump(twoSum([2, 7, 11, 15], 9)); // [0, 1]
echo "</pre>";
