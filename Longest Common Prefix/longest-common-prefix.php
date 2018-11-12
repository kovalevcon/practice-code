<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 12.11.18
 * Time: 16:13
 */

/**
 * Find the longest common prefix string amongst an array of strings function
 *
 * @param array $strs
 * @return string
 */
function longestCommonPrefix(array $strs): string
{
    if (empty($strs)) {
        return "";
    }

    $prefix = '';
    $start = $end = 0;
    $first = $strs[0];

    for ($i = 0, $length = strlen($first); $i < $length; $i++) {
        ++$end;
        $tempPrefix = mb_substr($first, $start, $end);
        foreach ($strs as $str) {
            if ($tempPrefix !== mb_substr($str, $start, $end)) {
                break 2;
            }
        }
        $prefix = $tempPrefix;
    }

    return $prefix;
}

echo "<pre>longestCommonPrefix([\"flower\",\"flow\",\"flight\"])\r\n";
echo longestCommonPrefix(["flower","flow","flight"]); // "fl"
echo "</pre>";

echo "<pre>longestCommonPrefix([])\r\n";
echo longestCommonPrefix([]); // ""
echo "</pre>";