<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 17.09.18
 * Time: 17:59
 */

/**
 * Function for left rotate array
 *
 * @param array $arr
 * @param int $n
 * @return array
 */
function leftRotation(array $arr, int $n): array
{
    return array_merge(
        array_slice($arr, $n), // remaining part
        array_slice($arr, 0, $n) // rotate part
    );
}

echo "<pre>leftRotation([1, 2, 3, 4, 5], 4)\r\n";
echo implode(" ",leftRotation([1, 2, 3, 4, 5], 4));
echo "</pre>";
