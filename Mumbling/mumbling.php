<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 10.09.18
 * Time: 18:45
 */

/**
 * Mumbling function
 *
 * @param string $s
 * @return string
 */
function accum(string $s): string
{
    $s = str_split($s);
    foreach ($s as $key => $value) {
        $s[$key] = strtoupper($value) . str_repeat(strtolower($value), $key);
    }

    return implode("-", $s);
}

echo "<pre>accum(\"abcd\")\r\n";
echo accum("abcd"); // "A-Bb-Ccc-Dddd"
echo "</pre>";

echo "<pre>accum(\"RqaEzty\")\r\n";
echo accum("RqaEzty"); // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
echo "</pre>";

echo "<pre>accum(\"cwAt\")\r\n"; // "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
echo accum("cwAt"); // "C-Ww-Aaa-Tttt"
echo "</pre>";