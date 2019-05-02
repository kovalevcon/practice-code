<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 02.05.19
 * Time: 19:05
 */

/**
 * Plus one function
 *
 * @param array[int] $digits
 * @return array
 */
function plusOne(array $digits): array
{
    for ($i = count($digits) - 1; $i >= 0; $i--) {
        if ($digits[$i] < 9) {
            $digits[$i]++;
            return $digits;
        }
        $digits[$i] = 0;
    }

    if ($digits[0] === 0) {
        array_unshift($digits, 1);
    }

    return $digits;
}

echo "<pre>plusOne([1, 2, 3])\r\n";
var_dump(plusOne([1, 2, 3])) ; // [1, 2, 4]
echo "</pre>";

echo "<pre>plusOne([4, 3, 2, 1])\r\n";
var_dump(plusOne([4, 3, 2, 1])) ; // [4, 3, 2, 2]
echo "</pre>";

echo "<pre>plusOne([9, 9, 9])\r\n";
var_dump(plusOne([9, 9, 9])) ; // [1, 0, 0, 0]
echo "</pre>";