<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 17.08.18
 * Time: 15:26
 */

/**
 * Revers array
 *
 * @param array $a
 * @return array
 */
function reverseArray(array $a): array
{
    $revers = [];
    for ($i = count($a) - 1; $i > -1; $i--) {
        $revers[] = $a[$i];
    }

    return $revers;
}

echo "<pre>reverseArray([1, 4, 3, 2])\r\n";
var_dump(reverseArray([1, 4, 3, 2]));
echo "</pre>";
