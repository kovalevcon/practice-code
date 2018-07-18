<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 18.07.18
 * Time: 15:33
 */

/**
 * Count apple and orange
 *
 * @param int $s
 * @param int $t
 * @param int $a
 * @param int $b
 * @param array $apples
 * @param array $oranges
 * @return void
 */
function countApplesAndOranges(int $s, int $t, int $a, int $b, array $apples, array $oranges): void
{
    printf("%d\r\n%d", countFruits($apples, $a, $s, $t), countFruits($oranges, $b, $s, $t));
}

/**
 * Count fruits in range
 *
 * @param array $fruits
 * @param int $a
 * @param int $s
 * @param int $t
 * @return int
 */
function countFruits(array $fruits, int $a, int $s, int $t): int
{
    return count(array_filter($fruits, function ($f) use ($a, $s, $t) {
        return $a + $f >= $s and $a + $f <= $t;
    }));
}

echo "<pre>countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6])\r\n";
countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6]);
echo "</pre>";

echo "<pre>countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6])\r\n";
countApplesAndOranges(37455, 87275, 35609, 89610, [19736, 19374, -68796, 0, -68800, -80005], [-88383, -8147, 73241, -33256, 2022]);
echo "</pre>";
