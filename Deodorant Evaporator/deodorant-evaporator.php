<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 31.01.19
 * Time: 17:49
 */

/**
 * Complete the deodorantEvaporator function below.
 *
 * @param mixed $content
 * @param mixed $evap_per_day
 * @param mixed $threshold
 * @return int
 */
function evaporator($content, $evap_per_day, $threshold): int
{
    $days = 0;
    $gas = 100;
    while ($gas > $threshold) {
        $gas -= $gas * $evap_per_day / 100;
        $days++;
    }

    return $days;
}

echo "<pre>evaporator(10, 10, 10)\r\n";
echo evaporator(10, 10, 10); // 22
echo "</pre>";

echo "<pre>evaporator(50, 12, 1)\r\n";
echo evaporator(50, 12, 1); // 37
echo "</pre>";

echo "<pre>evaporator(10, 1, 1)\r\n";
echo evaporator(10, 1, 1); // 459
echo "</pre>";