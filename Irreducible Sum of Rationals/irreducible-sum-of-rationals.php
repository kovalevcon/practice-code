<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 18.01.19
 * Time: 17:54
 */

/**
 * Calculate GCD
 *
 * @link https://en.wikipedia.org/wiki/Greatest_common_divisor
 * @param int $a
 * @param int $b
 * @return int
 */
function gcd(int $a, int $b): int
{
    if ($b == 0) {
        return $a;
    }

    return gcd($b, $a % $b);
}

/**
 * Calculate LCM
 *
 * @param array $n
 * @return int
 */
function lcms($n): int
{
    return array_reduce($n, function ($x, $y) {
        return ($x * $y) / gcd($x, $y);
    }, 1);
}

/**
 * Calculate summary of fractions
 *
 * @param array $l
 * @return array|int|null
 */
function sumFracts(array $l)
{
    if (!count($l)) {
        return null;
    }

    $numerator = 0;
    $denominator = lcms(array_map(function ($n) {
        return $n[1];
    }, $l));

    for ($i = 0, $len = count($l); $i < $len; $i++) {
        $k = intval($denominator / $l[$i][1]);
        $numerator += $k * $l[$i][0];
    }

    $finalGcd = gcd($numerator, $denominator);

    return ($numerator % $denominator !== 0)
        ? [intval($numerator / $finalGcd), intval($denominator / $finalGcd)] : intval($numerator / $denominator);
}

echo "<pre>sumFracts([[62, 63], [62, 64]])\r\n";
var_dump(sumFracts([[62, 63], [62, 64]])); // [3937, 2016]
echo "</pre>";

echo "<pre>sumFracts([[1, 3], [5, 3]])\r\n";
echo sumFracts([[1, 3], [5, 3]]); // 2
echo "</pre>";

echo "<pre>sumFracts([[1, 2], [1, 3], [1, 4]])\r\n";
var_dump(sumFracts([[1, 2], [1, 3], [1, 4]])); // [13, 12]
echo "</pre>";