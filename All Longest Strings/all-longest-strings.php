<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 05.11.18
 * Time: 12:50
 */

/**
 * Find longest strings in array function
 *
 * @param array $inputArray
 * @return array
 */
function allLongestStrings(array $inputArray): array
{
    $maxLength = max(array_map('strlen', $inputArray));

    return array_values(array_filter($inputArray, function ($val) use ($maxLength) {
        return strlen($val) === $maxLength;
    }));
}

echo "<pre>allLongestStrings([\"aba\", \"aa\", \"ad\", \"vcd\", \"aba\"])\r\n";
var_dump(allLongestStrings(["aba", "aa", "ad", "vcd", "aba"])); // ["aba", "vcd", "aba"]
echo "</pre>";