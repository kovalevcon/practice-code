<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 24.08.18
 * Time: 17:37
 */

/**
 * Remove smallest value in array
 *
 * @param array $array
 * @return array
 */
function removeSmallest(array $array): array
{
    if (count($array)) {
        $copy = $array;
        unset($copy[array_search(min($array), $array)]);
        return $copy;
    }

    return $array;
}

echo "<pre>removeSmallest([2, 2, 1, 2, 1])\r\n";
var_dump(removeSmallest([2, 2, 1, 2, 1])); // [2, 2, 2, 1]
echo "</pre>";
