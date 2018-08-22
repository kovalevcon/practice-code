<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.08.18
 * Time: 16:47
 */

/**
 * Function find tribonacci sequence
 *
 * @param array $signature
 * @param int $n
 * @return array
 */
function tribonacci(array $signature, int $n): array
{
    while (count($signature) < $n) {
        array_push($signature, array_sum(array_slice($signature, -3)));
    }

    return array_slice($signature, 0, $n);
}


echo "<pre>tribonacci([1, 1, 1], 10)\r\n";
var_dump(tribonacci([1, 1, 1], 10)); // [1, 1, 1, 3, 5, 9, 17, 31, 105]
echo "</pre>";
