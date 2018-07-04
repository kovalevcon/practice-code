<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 04.07.18
 * Time: 10:24
 */

/**
 * Find maximum length difference from two arrays
 *
 * @param array $a1
 * @param array $a2
 * @return int
 */
function mxdiflg(array $a1, array $a2)
{
    if (!count($a1) || !count($a2))
        return -1;

    $a1 = array_map('strlen', $a1);
    $a2 = array_map('strlen', $a2);

    return max(
        abs(max($a1) - min($a2)), abs(min($a1) - max($a2))
    );
}

$s1 = ["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"];
$s2 = ["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"];

echo "<pre>Array \$s1\r\n";
var_dump($s1);
echo "</pre>";

echo "<pre>Array \$s2\r\n";
var_dump($s2);
echo "</pre>";

echo "<pre>mxdiflg(\$s1, \$s2)\r\n";
echo mxdiflg($s1, $s2);
echo "</pre>";
