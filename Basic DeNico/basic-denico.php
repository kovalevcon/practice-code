<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.09.18
 * Time: 18:38
 */

/**
 * Basic DeNico variation function
 *
 * @param string $key
 * @param string $message
 * @return string
 */
function de_nico(string $key, string $message): string
{
    $lengthKey = strlen($key);
    $sortKey = str_split($key);
    sort($sortKey);
    $sortKey = array_flip($sortKey);

    $hash = [];
    for ($i = 0; $i < $lengthKey; $i++) {
        $hash[$key[$i]] = $sortKey[$key[$i]];
    }

    $result = "";
    for ($i = 0, $lengthMsg = strlen($message); $i < $lengthMsg; $i += $lengthKey) {
        foreach (str_split($key) as $x) {
            $temp = mb_substr($message, $i, $i + $lengthKey);
            $result .= $temp[$hash[$x]] ?? ' ';
        }
    }

    return rtrim($result);
}

echo "<pre>de_nico(\"crazy\", \"cseerntiofarmit on  \");\r\n";
echo de_nico("crazy", "cseerntiofarmit on  "); // 'secretinformation'
echo "</pre>";
