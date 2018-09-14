<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 14.09.18
 * Time: 17:54
 */

/**
 * Find result by formula for linear sequence
 *
 * @param array $sequence
 * @return Closure|string
 */
function getFunction(array $sequence): Closure
{
    $first = $sequence[0];
    $diff = $sequence[1] - $first;
    for ($i = 1, $len = count($sequence); $i < $len; $i++) {
        if ($sequence[$i] - $sequence[$i - 1] <> $diff) {
            return "Non-linear sequence";
        }
    }

    $f = function ($x) use ($diff, $first) {
        return $diff * $x + $first;
    };

    return $f;
}

echo "<pre>getFunction([0, 1, 2, 3, 4])\r\n";
echo getFunction([0, 1, 2, 3, 4])(5); // "f(x) = x = 5"
echo "</pre>";

echo "<pre>getFunction([-19, -20, -21, -22, -23])\r\n";
echo getFunction([-19, -20, -21, -22, -23])(5); // "f(x) = -x - 19 = -24"
echo "</pre>";