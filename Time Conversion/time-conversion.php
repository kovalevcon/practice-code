<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 10.07.18
 * Time: 15:06
 */

/**
 * Time conversion: 07:05:45PM -> 19:05:45
 *
 * @param string $s
 * @return string
 */
function timeConversion(string $s): string
{
    return (new \DateTime($s))->format('H:i:s');
}

echo "<pre>timeConversion(07:05:45PM)\r\n";
echo timeConversion('07:05:45PM');
echo "</pre>";