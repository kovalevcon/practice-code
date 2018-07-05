<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 05.07.18
 * Time: 18:29
 */

/**
 * Find birthday cake candles
 *
 * @param array $array
 * @return int
 */
function birthdayCakeCandles(array $array): int
{
    $max = max($array);
    return count(array_filter($array, function($item) use ($max) {
        return $item == $max;
    }));
}