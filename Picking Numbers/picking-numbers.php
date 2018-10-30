<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 30.10.18
 * Time: 11:54
 */

/**
 * Find max length of subarrays function
 *
 * @param array $a
 * @return int
 */
function pickingNumbers(array $a): int
{
    $counts = [];

    foreach (array_unique($a) as $x) {
        $counts[] = count(array_filter($a, function ($i) use ($x) {
            return $i === $x || $i === $x + 1;
        }));
    }

    return max($counts);
}

echo "<pre>pickingNumbers([4, 6, 5, 3, 3, 1])\r\n";
echo pickingNumbers([4, 6, 5, 3, 3, 1]); // 3
echo "</pre>";

echo "<pre>pickingNumbers([1, 2, 2, 3, 1, 2])\r\n";
echo pickingNumbers([1, 2, 2, 3, 1, 2]); // 5
echo "</pre>";