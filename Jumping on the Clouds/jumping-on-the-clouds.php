<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 03.06.19
 * Time: 10:20
 */

/**
 * Determine the minimum number of jumps it to jump from her starting position to the last cloud
 *
 * @param array $c
 * @return int
 */
function jumpingOnClouds(array $c): int
{
    $jumps = 0;
    $c = array_slice($c, 1);
    while (count($c) > 1) {
        $part = $c[1] === 0 ? 2 : 1;
        $c = array_slice($c, $part);
        $jumps++;
    }

    return $jumps + count($c);
}

echo "<pre>jumpingOnClouds([0, 0, 0, 1, 0, 0])\r\n";
echo jumpingOnClouds([0, 0, 0, 1, 0, 0]); // 3
echo "</pre>";

echo "<pre>jumpingOnClouds([0, 0, 1, 0, 0, 1, 0])\r\n";
echo jumpingOnClouds([0, 0, 1, 0, 0, 1, 0]); // 4
echo "</pre>";