<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.09.18
 * Time: 18:30
 */

/**
 * Sparse Arrays function
 *
 * @param array $strings
 * @param array $queries
 * @return array
 */
function matchingStrings(array $strings, array $queries): array
{
    $hash = [];
    foreach ($strings as $s) {
        isset($hash[$s]) ? $hash[$s]++ : $hash[$s] = 1;
    }

    $res = [];
    foreach ($queries as $q) {
        array_push($res, $hash[$q] ?? 0);
    }

    return $res;
}


echo "<pre>matchingStrings(['aba', 'baba', 'aba', 'xzxb'], ['aba', 'xzxb', 'ab'])\r\n";
var_dump(matchingStrings(['aba', 'baba', 'aba', 'xzxb'], ['aba', 'xzxb', 'ab'])); // [2, 1, 0]
echo "</pre>";
