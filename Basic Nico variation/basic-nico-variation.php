<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 25.09.18
 * Time: 17:27
 */

/**
 * Basic Nico variation function
 *
 * @param string $key
 * @param string $message
 * @return string
 */
function nico(string $key, string $message): string
{
    $sortKey = str_split($key);
    sort($sortKey);

    $result = "";
    for($i = 0, $lengthKey = strlen($key), $lengthMsg = strlen($message); $i < $lengthMsg; $i += $lengthKey) {
        foreach ($sortKey as $x) {
            $temp = mb_substr($message, $i, $i + $lengthKey);
            $result .= $temp[strpos($key, $x)] ?? ' ';
        }
    }

    return $result;
}

echo "<pre>nico('crazy', 'secretinformation');\r\n";
echo nico('crazy', 'secretinformation'); // 'cseerntiofarmit on  '
echo "</pre>";
