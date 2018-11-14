<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 14.11.18
 * Time: 13:01
 */

/**
 * find the number of common characters between two strings function
 *
 * @param string $s1
 * @param string $s2
 * @return int
 */
function commonCharacterCount(string $s1, string $s2): int
{
    $result = 0;
    foreach (array_unique(str_split($s1)) as $chr) {
        $result += min([substr_count($s1, $chr), substr_count($s2, $chr)]);
    }

    return $result;
}

echo "<pre>commonCharacterCount(\"aabcc\",\"adcaa\")\r\n";
echo commonCharacterCount("aabcc","adcaa"); // 3
echo "</pre>";

echo "<pre>commonCharacterCount(\"zzzz\",\"zzzzzzz\")\r\n";
echo commonCharacterCount("zzzz","zzzzzzz"); // ""
echo "</pre>";