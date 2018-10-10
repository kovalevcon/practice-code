<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 10.10.18
 * Time: 11:10
 */

/**
 * Get expanded form for integer
 *
 * @param int $n
 * @return string
 */
function expanded_form(int $n): string
{
    $delimiters = [];
    for ($i = strlen($n); $i >= 0; $i--) {
        $delimiters[] = sprintf("%.0f", 10 ** $i);
    }

    $res = [];
    foreach ($delimiters as $delimiter) {
        $quotient = intdiv($n, intval($delimiter));
        $remain = $n % $delimiter;
        if ($quotient != 0) {
            $res[] = $quotient * $delimiter;
            $n = $remain;
        }
    }

    return implode(' + ', $res);
}

echo "<pre>expanded_form(757269)\r\n";
echo expanded_form(757269); // '700000 + 50000 + 7000 + 200 + 60 + 9'
echo "</pre>";

echo "<pre>expanded_form(12)\r\n";
echo expanded_form(12); // '10 + 2'
echo "</pre>";

echo "<pre>expanded_form(42)\r\n";
echo expanded_form(42); // '40 + 2'
echo "</pre>";

echo "<pre>expanded_form(70304)\r\n";
echo expanded_form(70304); // '70000 + 300 + 4'
echo "</pre>";