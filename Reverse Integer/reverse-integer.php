<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 05.10.18
 * Time: 15:04
 */

/**
 * Reverse integer function
 *
 * @param int $x
 * @return int
 */
function reverse(int $x): int
{
    $minInt = pow(-2, 31);
    $maxInt = pow(2, 31) - 1;

    if ($x == 0 || $x > $maxInt || $x < $minInt) {
        return 0;
    }

    $rev = (int)strrev((string)abs($x)) * ($x / abs($x));

    return $rev < $maxInt && $rev > $minInt ? $rev : 0;
}

echo "<pre>reverse(-123)\r\n";
echo reverse(-123); // -321
echo "</pre>";

echo "<pre>reverse(1534236469)\r\n";
echo reverse(1534236469); // Over max int, then result 0
echo "</pre>";
