<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 09.07.18
 * Time: 18:26
 */

/**
 * Calculate financing plan
 *
 * @param int $n
 * @return int
 */
function finance(int $n): int
{
    $saves = 0; $weeks = $n;
    for ($i = 0; $i <= $n; $i++) {
        // Find first a(0)
        $first = $i * 2;
        // Find last a(n)
        $last = $first + $weeks;
        // Calculate sum by formula: @link https://goo.gl/Ma5Gds
        $saves += $weeks != 0 ? (($first + $last) / 2) * ($weeks + 1) : $last;
        // Decrement weeks
        --$weeks;
    }

    return $saves;
}

echo "<pre>finance(5)\r\n";
echo finance(5); // 105
echo "</pre>";

echo "<pre>finance(6)\r\n";
echo finance(6); // 168
echo "</pre>";

echo "<pre>finance(7)\r\n";
echo finance(7); // 252
echo "</pre>";

echo "<pre>finance(5000)\r\n";
echo finance(5000); // 62537505000
echo "</pre>";