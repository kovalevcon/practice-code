<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 15.08.18
 * Time: 17:08
 */

/**
 * Find divisible sum pairs
 *
 * @param int $n
 * @param int $k
 * @param array $ar
 * @return int
 */
function divisibleSumPairs(int $n, int $k, array $ar): int
{
    $divSum = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if (($ar[$i] + $ar[$j]) % $k == 0) {
                ++$divSum;
            }
        }
    }

    return $divSum;
}

echo "<pre>divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2])\r\n";
echo divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2]); // 5
echo "</pre>";
