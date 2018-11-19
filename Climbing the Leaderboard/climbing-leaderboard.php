<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 19.11.18
 * Time: 14:06
 */

/**
 * Climbing the Leaderboard function
 *
 * @param array $scores
 * @param array $alice
 * @return array
 */
function climbingLeaderboard(array $scores, array $alice): array
{
    $scores = array_unique($scores);
    rsort($scores);
    $length = count($scores) - 1;
    $result = [];

    foreach ($alice as $score) {
        while ($length >= 0) {
            if ($score >= $scores[$length]) {
                --$length;
            } else {
                $result[] = $length + 2;
                break;
            }
        }

        if ($length < 0) {
            $result[] = 1;
        }
    }

    return $result;
}

echo "<pre>climbingLeaderboard([100, 100, 50, 40, 40, 20, 10], [5, 25, 50, 120])\r\n";
var_dump(climbingLeaderboard([100, 100, 50, 40, 40, 20, 10], [5, 25, 50, 120])); // [6, 4, 2, 1]
echo "</pre>";

echo "<pre>climbingLeaderboard([100, 90, 90, 80, 75, 60], [50, 65, 77, 90, 102])\r\n";
var_dump(climbingLeaderboard([100, 90, 90, 80, 75, 60], [50, 65, 77, 90, 102])); // [6, 5, 4, 2, 1]
echo "</pre>";