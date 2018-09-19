<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 18.09.18
 * Time: 12:48
 */

/**
 * Array diff function
 *
 * @param array $a
 * @param array $b
 * @return array
 */
function arrayDiff(array $a, array $b): array
{
    return array_filter($a, function ($v) use ($b) {
       return !in_array($v, $b);
    });
}

echo "<pre>arrayDiff([1, 2, 2], [2])\r\n";
var_dump(arrayDiff([1, 2, 2], [2])); // [1]
echo "</pre>";

echo "<pre>arrayDiff([1, 2, 2], [2])\r\n";
var_dump(arrayDiff([1, 3, 4, 5, 2, 3], [3])); // [1, 4, 5, 2]
echo "</pre>";
