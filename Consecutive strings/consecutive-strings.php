<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 20.08.18
 * Time: 15:16
 */

/**
 * Consecutive strings function
 *
 * @param array $strarr
 * @param int $k
 * @return string
 */
function longestConsec(array $strarr, int $k): string
{
    $n = count($strarr);
    if ($n == 0 || $k > $n || $k <= 0) {
        return "";
    }

    $longest = "";
    for($i = 0; $i < $n; $i++) {
        $str = implode(array_slice($strarr, $i, $k));
        if (strlen($str) > strlen($longest)) {
            $longest = $str;
        }
    }

    return $longest;
}

echo "<pre>longestConsec([\"zone\", \"abigail\", \"theta\", \"form\", \"libe\", \"zas\"], 2)\r\n";
echo longestConsec(["zone", "abigail", "theta", "form", "libe", "zas"], 2); // "abigailtheta"
echo "</pre>";
