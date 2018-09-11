<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 11.09.18
 * Time: 18:27
 */

/**
 * Find max int for two array function
 *
 * @param array $keyboards
 * @param array $drives
 * @param int $b
 * @return int
 */
function getMoneySpent(array $keyboards, array $drives, int $b): int
{
    $res = -1;
    sort($keyboards);
    rsort($drives);

    foreach ($keyboards as $k) {
        foreach ($drives as $d) {
            $sum = $k + $d;
            if ($sum <= $b && $sum > $res) {
                $res = $sum;
            }
        }
    }

    return $res;
}

echo "<pre>getMoneySpent([3, 1], [5, 2, 8], 10)\r\n";
echo getMoneySpent([3, 1], [5, 2, 8], 10); // 9
echo "</pre>";

echo "<pre>getMoneySpent([4], [5], 5)\r\n";
echo getMoneySpent([4], [5], 5); // -1
echo "</pre>";