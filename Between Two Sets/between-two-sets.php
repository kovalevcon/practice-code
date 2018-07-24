<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 24.07.18
 * Time: 11:24
 */

/**
 * Count count numbers in between two arrays
 *
 * @param array $a
 * @param array $b
 * @return int
 */
function getTotalX(array $a, array $b): int
{
    /** @var int $lcm */
    $lcm = calcForArray($a, 'lcm');
    /** @var int $gcd */
    $gcd = calcForArray($b, 'gcd');

    $count = 0;
    for ($i = $lcm, $j = 2; $i <= $gcd; $i = $lcm * $j, $j++) {
        if ($gcd % $i == 0) {
            ++$count;
        }
    }

    return $count;
}

/**
 * Calculate GCD
 * @link https://en.wikipedia.org/wiki/Greatest_common_divisor
 *
 * @param int $a
 * @param int $b
 * @return mixed
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
 * @link https://en.wikipedia.org/wiki/Least_common_multiple
 *
 * @param int $a
 * @param int $b
 * @return int
 */
function lcm(int $a, int $b): int
{
    return $a * ($b / gcd($a, $b));
}

/**
 * Calculate GCD/LCM for array
 *
 * @param array $arr
 * @param string $name gcd or lcm
 * @return int
 */
function calcForArray(array $arr, string $name): int
{
    $result = $arr[0];
    for ($i = 1, $count = count($arr); $i < $count; $i++) {
        $result = $name($result, $arr[$i]);
    }

    return $result;
}

echo "<pre>getTotalX([2, 4], [16, 32, 96])\r\n";
echo getTotalX([2, 4], [16, 32, 96]);
echo "</pre>";
