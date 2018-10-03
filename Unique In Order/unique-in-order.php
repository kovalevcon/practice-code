<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 03.10.18
 * Time: 17:13
 */

/**
 * Unique In Order function
 *
 * @param string|array $iterable
 * @return array
 */
function uniqueInOrder($iterable): array
{
    $len = is_array($iterable) ? count($iterable) : strlen($iterable);
    $res = [];

    if ($len) {
        $item = $iterable[0];
        $res[] = $item;

        for($i = 0; $i < $len; $i++) {
            if ($iterable[$i] !== $item) {
                $item = $iterable[$i];
                $res[] = $item;
            }
        }
    }

    return $res;
}

echo "<pre>uniqueInOrder(\"AAAABBBCCDAABBB\")\r\n";
var_dump(uniqueInOrder("AAAABBBCCDAABBB")); // ['A', 'B', 'C', 'D', 'A', 'B']
echo "</pre>";

echo "<pre>uniqueInOrder(\"ABBCcAD\")\r\n";
var_dump(uniqueInOrder("ABBCcAD")); // ['A', 'B', 'C', 'c', 'A', 'D']
echo "</pre>";

echo "<pre>uniqueInOrder([1,2,2,3,3])\r\n";
var_dump(uniqueInOrder([1,2,2,3,3])); // [1, 2, 3]
echo "</pre>";