<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 18.10.18
 * Time: 16:32
 */

/**
 * Roman number to integer
 *
 * @param string $s
 * @return int
 */
function romanToInt(string $s): int
{
    $symbols = [
        'Z' => 0, 'I' => 1, 'V' => 5, 'X' => 10, 'L' => 50, 'C' => 100, 'D' => 500, 'M' => 1000,
    ];

    $num = 0;
    $prev = 'Z';

    for ($i = strlen($s) - 1; $i > -1; $i--) {
        $curr = $s[$i];
        $num += $symbols[$curr] >= $symbols[$prev] ? $symbols[$curr] : -$symbols[$curr];
        $prev = $curr;
    }

    return $num;
}

echo "<pre>romanToInt('III')\r\n";
echo romanToInt('III'); // 3
echo "</pre>";

echo "<pre>romanToInt('LVIII')\r\n";
echo romanToInt('LVIII'); // 58
echo "</pre>";

echo "<pre>romanToInt('MCMXCIV')\r\n";
echo romanToInt('MCMXCIV'); // 1994
echo "</pre>";