<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 20.08.18
 * Time: 14:05
 */

/**
 * Migration bird function
 *
 * @param array $arr
 * @return int
 */
function migratoryBirds(array $arr): int
{
    $arrCount = [
        1 => countInArray($arr, 1),
        2 => countInArray($arr, 2),
        3 => countInArray($arr, 3),
        4 => countInArray($arr, 4),
        5 => countInArray($arr, 5),
    ];

    return arrayKeyByValue($arrCount, max($arrCount));

//    $arrayCount = array_count_values($arr);
//    $max = max($arrayCount);
//    $arrayCount = array_filter($arrayCount, function ($item) use ($max) {
//        return $item == $max;
//    });
//    ksort($arrayCount);
//
//    return array_keys($arrayCount)[0];
}

/**
 * Count repeat value in array
 *
 * @param $arr
 * @param $find
 * @return int
 */
function countInArray($arr, $find): int
{
    $count = 0;
    foreach ($arr as $item) {
        if ($item == $find) {
            ++$count;
        }
    }

    return $count;
}

/**
 * Get key by value in array
 *
 * @param $arr
 * @param $find
 * @return int
 */
function arrayKeyByValue($arr, $find): int
{
    foreach ($arr as $key => $value) {
        if ($value == $find) {
            return $key;
        }
    }

    return null;
}

echo "<pre>migratoryBirds([1, 4, 4, 4, 5, 3])\r\n";
echo migratoryBirds([1, 4, 4, 4, 5, 3]);
echo "</pre>";
