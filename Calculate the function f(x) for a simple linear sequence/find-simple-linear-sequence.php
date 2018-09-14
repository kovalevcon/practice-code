<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 13.09.18
 * Time: 18:18
 */

/**
 * Find formula for linear sequence
 *
 * @param array $sequence
 * @return string
 */
function getFunction(array $sequence): string
{
    $m = $sequence[0];
    $n = $sequence[1];

    if ($sequence == [0, 1, 2, 3, 4]) {
        return 'f(x) = x';
    } elseif ($sequence == [$m, $m, $m, $m, $m]) {
        return "f(x) = {$m}";
    } elseif ($sequence == [0, 1 * $n, 2 * $n, 3 * $n, 4 * $n]) {
        return "f(x) = {$n}x";
    } elseif ($sequence == [$m, 1 + $m, 2 + $m, 3 + $m, 4 + $m]) {
        return $m > 0 ? "f(x) = x + {$m}" : 'f(x) = x - ' . abs($m);
    } else {
        $n -= $m;
        if ($sequence == [$m, $n * 1 + $m, $n * 2 + $m, $n * 3 + $m, $n * 4 + $m]) {
            if (abs($n) === 1) {
                return $m > 0 ? "f(x) = x + {$m}" : 'f(x) = -x - ' . abs($m);
            }
            return $m > 0 ? "f(x) = {$n}x + {$m}" : "f(x) = {$n}x - " . abs($m);
        }
    }

    return "Non-linear sequence";
}

echo "<pre>getFunction([0, 1, 2, 3, 4])\r\n";
echo getFunction([0, 1, 2, 3, 4]); // "f(x) = x"
echo "</pre>";

echo "<pre>getFunction([-19, -20, -21, -22, -23])\r\n";
echo getFunction([-19, -20, -21, -22, -23]); // "f(x) = -x - 19"
echo "</pre>";