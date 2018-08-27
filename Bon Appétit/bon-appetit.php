<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.08.18
 * Time: 11:50
 */

/**
 * Bon appetit function
 *
 * @param array $bill
 * @param int $k
 * @param int $b
 * @return void
 */
function bonAppetit(array $bill, int $k, int $b)
{
    $charged = (array_sum($bill) - $bill[$k]) / 2;
    print($charged == $b ? 'Bon Appetit' : $b - $charged);
}

echo "<pre>bonAppetit([3, 10, 2, 9], 1, 12)\r\n";
bonAppetit([3, 10, 2, 9], 1, 12); // 5
echo "</pre>";

echo "<pre>bonAppetit([3, 10, 2, 9], 1, 7)\r\n";
bonAppetit([3, 10, 2, 9], 1, 7); // Bon Appetit
echo "</pre>";
