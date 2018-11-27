<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.11.18
 * Time: 18:38
 */

/**
 * Check is lucky ticket number
 *
 * @param int $n
 * @return bool
 */
function isLucky(int $n): bool
{
    $arr = str_split($n);
    $middle = intval(count($arr) / 2);

    return array_sum(array_slice($arr, 0, $middle)) === array_sum(array_slice($arr, $middle));
}

echo "<pre>isLucky(1230)\r\n";
var_dump(isLucky(1230)); // true
echo "</pre>";

echo "<pre>isLucky(239017)\r\n";
var_dump(isLucky(239017)); // false
echo "</pre>";