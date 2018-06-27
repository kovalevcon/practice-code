<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.06.18
 * Time: 17:42
 */

/**
 * Comparison points
 *
 * @param array $a
 * @param array $b
 * @return array
 */
function solve(array $a, array $b): array
{
    $result = [0, 0];

    for ($i = 0; $i < sizeof($a); $i++) {
        if (isset($a[$i]) && isset($b[$i])) {
            if ($a[$i] > $b[$i]) {
                ++$result[0];
            } elseif ($a[$i] < $b[$i]) {
                ++$result[1];
            }
        }
    }

    return $result;
}

$alicePoint = [5, 6, 7];
$bobPoint = [3, 6, 10];
$result = solve($alicePoint, $bobPoint);
printf("Alice point = %d VS Bob point = %d", $result[0], $result[1]);
