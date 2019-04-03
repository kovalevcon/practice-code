<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 03.04.19
 * Time: 17:00
 */

/**
 * Check whether two arrays are similar.
 *
 * @param array $a
 * @param array $b
 * @return bool
 */
function areSimilar(array $a, array $b): bool
{
    $filterA = array_filter($a, function ($v, $k) use ($b) {
        return $v !== $b[$k];
    }, ARRAY_FILTER_USE_BOTH);
    $filterB = array_filter($b, function ($v, $k) use ($a) {
        return $v !== $a[$k];
    }, ARRAY_FILTER_USE_BOTH);

    $diffA = $filterA;

    return count($diffA) === 0 ||
        (count($diffA) === 2 && implode("", $diffA) === implode("", array_reverse($filterB)))
        ;
}

echo "<pre>areSimilar([1, 2, 3], [2, 1, 3])\r\n";
var_dump(areSimilar([1, 2, 3], [2, 1, 3])); // true
echo "</pre>";

echo "<pre>areSimilar([1, 2], [2, 1, 3])\r\n";
var_dump(areSimilar([1, 2], [2, 1, 3])); // false
echo "</pre>";

echo "<pre>areSimilar([1, 2, 3], [1, 2, 3])\r\n";
var_dump(areSimilar([1, 2, 3], [1, 2, 3])); // true
echo "</pre>";

//console.log(areSimilar([1, 2, 3], [2, 1, 3])); // true
//console.log(areSimilar([1, 2], [2, 1, 3])); // false
//console.log(areSimilar([1, 2, 3], [1, 2, 3])); // true