<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 08.01.19
 * Time: 18:32
 */

/**
 * Alternating Sums function
 *
 * @param array $a
 * @return array
 */
function alternatingSums(array $a): array
{
    return [
        array_sum(array_filter($a, function($var) {
            return !($var & 1);
        }, ARRAY_FILTER_USE_KEY)),
        array_sum(array_filter($a, function($var) {
            return $var & 1;
        }, ARRAY_FILTER_USE_KEY))
    ];
}

echo "<pre>alternatingSums([50, 60, 60, 45, 70])\r\n";
var_dump(alternatingSums([50, 60, 60, 45, 70])); // [180, 105]
echo "</pre>";

echo "<pre>alternatingSums([100, 51, 50, 100])\r\n";
var_dump(alternatingSums([100, 51, 50, 100])); // [150, 151]
echo "</pre>";