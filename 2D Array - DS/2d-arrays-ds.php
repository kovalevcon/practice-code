<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.08.18
 * Time: 14:55
 */

/**
 * Function find hourglass max summary
 *
 * @param array $arr
 * @return int
 */
function hourglassSum(array $arr): int
{
    $arrSumHourglass = [];

    for ($i = 0, $count = count($arr) - 2; $i < $count; $i++) {
        for($j = 0; $j < $count; $j++) {
            $arrSumHourglass[] =
                $arr[$i][$j] + $arr[$i][$j + 1] + $arr[$i][$j + 2] + // first line
                $arr[$i + 1][$j + 1] + // middle line
                $arr[$i + 2][$j] + $arr[$i + 2][$j + 1] + $arr[$i + 2][$j + 2] // last line
            ;
        }
    }

    return max($arrSumHourglass);
}

$arr = [
    [-9, -9, -9, 1, 1, 1],
    [0,  -9,  0, 4, 3, 2],
    [-9, -9, -9, 1, 2, 3],
    [0,   0,  8, 6, 6, 0],
    [0,   0,  0, -2, 0, 0],
    [0,   0,  1, 2, 4, 0],
];
echo "<pre>hourglassSum(
    [-9, -9, -9, 1, 1, 1],
    [0,  -9,  0, 4, 3, 2],
    [-9, -9, -9, 1, 2, 3],
    [0,   0,  8, 6, 6, 0],
    [0,   0,  0, -2, 0, 0],
    [0,   0,  1, 2, 4, 0])\r\n";
echo hourglassSum($arr);
echo "</pre>";
