<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 07.12.18
 * Time: 17:09
 */

/**
 * Sort by height function
 *
 * @param array $a
 * @return array
 */
function sortByHeight(array $a): array
{
    $withoutTree = array_filter($a, function($v) {
        return $v !== -1;
    });
    $keys = array_keys($withoutTree);
    $values = array_values($withoutTree);
    sort($keys);
    sort($values);

    foreach ($keys as $key) {
        $a[$key] = array_shift($values);
    }

    return $a;
}

echo "<pre>sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180])\r\n";
var_dump(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180])); // [-1, 150, 160, 170, -1, -1, 180, 190]
echo "</pre>";

echo "<pre>sortByHeight([4, 2, 9, 11, 2, 16])\r\n";
var_dump(sortByHeight([4, 2, 9, 11, 2, 16])); // [2, 2, 4, 9, 11, 16]
echo "</pre>";