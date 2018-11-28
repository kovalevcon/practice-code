<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.11.18
 * Time: 18:34
 */

/**
 * Find count of the potion to be able to jump all of the hurdles
 *
 * @param int $k
 * @param array $height
 * @return int
 */
function hurdleRace(int $k, array $height): int
{
    $max = max($height);

    return $max > $k ? abs($max - $k) : 0;
}

echo "<pre>hurdleRace(4, [1, 6, 3, 5, 2])\r\n";
echo hurdleRace(4, [1, 6, 3, 5, 2]); // 2
echo "</pre>";

echo "<pre>hurdleRace(7, [2, 5, 4, 5, 2])\r\n";
echo hurdleRace(7, [2, 5, 4, 5, 2]); // 0
echo "</pre>";