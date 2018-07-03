<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 02.07.18
 * Time: 18:33
 */

/**
 * Find min and max sum in array
 *
 * @param array $arr
 * @return void
 */
function miniMaxSum(array $arr)
{
    $sum = array_sum($arr);
    printf("%d %d", $sum - max($arr), $sum - min($arr));
}

echo "<pre>miniMaxSum([1, 2, 3, 4, 5])\r\n";
miniMaxSum([1, 2, 3, 4, 5]);
echo "</pre>";
