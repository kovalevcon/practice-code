<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 17.10.18
 * Time: 11:15
 */

/**
 * Find the unique number in array
 *
 * @param array $a
 * @return mixed
 */
function find_uniq(array $a)
{
    sort($a);

    return $a[0] === $a[1] ? $a[count($a) - 1] : $a[0];
}

echo "<pre>find_uniq([1, 1, 1, 2, 1, 1])\r\n";
echo find_uniq([1, 1, 1, 2, 1, 1]); // 2
echo "</pre>";

echo "<pre>find_uniq([0, 0, 0.55, 0, 0])\r\n";
echo find_uniq([0, 0, 0.55, 0, 0]); // 0.55
echo "</pre>";

echo "<pre>find_uniq([0, 1, 0])\r\n";
echo find_uniq([0, 1, 0]); // 1
echo "</pre>";