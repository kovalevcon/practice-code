<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 05.09.18
 * Time: 14:58
 */

/**
 * Drawing book function
 *
 * @param int $n
 * @param int $p
 * @return int
 */
function pageCount(int $n, int $p): int
{
    return min(intval($p / 2), intval($n / 2) - intval($p / 2));
}

echo "<pre>pageCount(6, 2)\r\n";
echo pageCount(6, 2); // 1
echo "</pre>";

echo "<pre>pageCount(5, 4)\r\n";
echo pageCount(5, 4); // 0
echo "</pre>";