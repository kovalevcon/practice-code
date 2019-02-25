<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 25.02.19
 * Time: 14:25
 */

/**
 * Complete the beautifulDays function in the editor below. It must return the number of beautiful days in the range.
 *
 * @param int $i
 * @param int $j
 * @param int $k
 * @return int
 */
function beautifulDays(int $i, int $j, int $k): int
{
    $count = 0;
    $check = function ($val) use ($k) {
        return abs($val - intval(strrev(strval($val)))) % $k === 0;
    };

    while ($i <= $j) {
        $count += $check($i);
        $i++;
    }

    return $count;
}

echo "<pre>beautifulDays(20, 23, 6)\r\n";
echo beautifulDays(20, 23, 6); // 2
echo "</pre>";

echo "<pre>beautifulDays(13, 45, 3)\r\n";
echo beautifulDays(13, 45, 3); // 33
echo "</pre>";