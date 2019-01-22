<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.01.19
 * Time: 16:39
 */

/**
 * Implement strStr function
 *
 * @param string $haystack
 * @param string $needle
 * @return int
 */
function implementStrStr(string $haystack, string $needle): int
{
    if (!$needle) {
        return 0;
    }
    $hLength = strlen($haystack);
    $nLength = strlen($needle);

    if (!$haystack || $hLength < $nLength) {
        return -1;
    }

    for ($i = 0; $i <= $hLength; $i++) {
        if (substr($haystack, $i, $nLength) === $needle) {
            return $i;
        }
    }

    return -1;
}

echo "<pre>strStr('hello', 'll')\r\n";
echo implementStrStr('hello', 'll'); // 2
echo "</pre>";

echo "<pre>strStr('aaaaa', 'bba')\r\n";
echo implementStrStr('aaaaa', 'bba'); // -1
echo "</pre>";

echo "<pre>strStr('aaaaa', '')\r\n";
echo implementStrStr('aaaaa', ''); // 0
echo "</pre>";