<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.07.18
 * Time: 16:56
 */

/**
 * Sock merchant function
 *
 * @param int $n
 * @param array $ar
 * @return int
 */
function sockMerchant(int $n, array $ar) {
    return array_sum(array_map(function ($n) {
        return intval($n / 2);
    }, array_count_values($ar)));
}

echo "<pre>sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20])\r\n";
echo sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]); // 3
echo "</pre>";