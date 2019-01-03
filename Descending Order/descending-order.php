<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 03.01.19
 * Time: 14:47
 */

/**
 * Return it with its digits in descending order
 *
 * @param int $n
 * @return int
 */
function descendingOrder(int $n): int
{
    $arr = str_split($n);
    rsort($arr, SORT_NUMERIC);
    return intval(implode('', $arr));
}

echo "<pre>descendingOrder(1021)\r\n";
echo descendingOrder(1021); // 2110
echo "</pre>";

echo "<pre>descendingOrder(123456789)\r\n";
echo descendingOrder(123456789); // 987654321
echo "</pre>";