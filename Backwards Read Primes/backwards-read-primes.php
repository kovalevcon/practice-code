<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.06.18
 * Time: 17:27
 */

/**
 * Get array backwards prime
 *
 * @param int $start
 * @param int $stop
 * @return array
 */
function backwardsPrime(int $start, int $stop): array
{
    $res = [];

    for ($i = $start; $i <= $stop; $i++) {
        if (isLeftRightPrime($i)) {
            array_push($res, $i);
        }
    }

    return $res;
}


/**
 * Check number is this left-right prime
 *
 * @param int $numb
 * @return bool
 */
function isLeftRightPrime(int $numb): bool
{
    $numbReverse = intval(strrev((string)$numb));

    if (isPrime($numb) && $numb != $numbReverse)
        return isPrime($numbReverse);

    return false;
}

/**
 * Check number is this prime
 *
 * @param int $numb
 * @return bool
 */
function isPrime(int $numb): bool
{
    if (in_array($numb, [2, 3, 5]))
        return true;

    if ($numb % 2 == 0 or $numb % 3 == 0)
        return false;

    $range = range(5, pow($numb, 0.5) + 1, 2);
    foreach ($range as $number) {
        if ($numb % $number == 0)
            return false;
    }

    return true;
}

echo "backwardsPrime(2, 100)<pre>";
var_dump(backwardsPrime(2, 100));
echo "</pre>";

echo "backwardsPrime(9900, 10000)<pre>";
var_dump(backwardsPrime(9900, 10000));
echo "</pre>";
