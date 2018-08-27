<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.08.18
 * Time: 16:03
 */

/**
 * Find max sum in array range
 *
 * @param array $a
 * @param array $range
 * @return int
 */
function max_sum(array $a, array $range): int
{
//    return max(array_map(function ($n) use ($a) {
//        return array_sum(array_slice($a, $n[0], $n[1] - $n[0] + 1));
//    }, $range));

    $arrSum = [];
    foreach ($range as $key) {
        $arrSum[] = array_sum(array_slice($a, $key[0], $key[1] - $key[0] + 1));
    }

    return max($arrSum);
}

echo "<pre>max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]])\r\n";
echo max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]]); // 6
echo "</pre>";

echo "<pre>max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 4], [2, 5]])\r\n";
echo max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 4], [2, 5]]); // 0
echo "</pre>";
