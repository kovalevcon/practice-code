<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 29.04.19
 * Time: 18:05
 */

/**
 * Delete occurrences of an element if it occurs more than n times
 *
 * @param array[int] $arr
 * @param int $n
 * @return array
 */
function deleteNth(array $arr, int $n): array
{
    $result = [];
    for ($i = 0, $len = count($arr); $i < $len; $i++) {
        if (empty(array_count_values($result)[$arr[$i]]) || array_count_values($result)[$arr[$i]] < $n) {
            $result[] = $arr[$i];
        }
    }

    return $result;
}

echo "<pre>deleteNth([20, 37, 20, 21], 1)\r\n";
var_dump(deleteNth([20, 37, 20, 21], 1)) ; // [20, 37, 21]
echo "</pre>";

echo "<pre>deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3)\r\n";
var_dump(deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3)) ; // [1, 1, 3, 3, 7, 2, 2, 2]
echo "</pre>";

echo "<pre>deleteNth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3)\r\n";
var_dump(deleteNth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3)) ; // [1, 2, 3, 1, 1, 2, 2, 3, 3, 4, 5]
echo "</pre>";