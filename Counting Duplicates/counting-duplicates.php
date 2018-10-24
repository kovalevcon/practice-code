<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 24.10.18
 * Time: 11:07
 */

/**
 * Duplicate count function
 *
 * @param string $text
 * @return int
 */
function duplicateCount(string $text): int
{
    $text = strtolower($text);

    $res = 0;
    foreach (array_unique(str_split($text)) as $item) {
        if (substr_count($text, $item) > 1) {
            $res++;
        }
    }

    return $res;
}

echo "<pre>duplicateCount('abcde')\r\n";
echo duplicateCount('abcde'); // 0
echo "</pre>";

echo "<pre>duplicateCount('aabbcde')\r\n";
echo duplicateCount('aabbcde'); // 2
echo "</pre>";

echo "<pre>duplicateCount('aabBcde')\r\n";
echo duplicateCount('aabBcde'); // 2
echo "</pre>";