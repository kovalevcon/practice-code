<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 24.08.18
 * Time: 15:47
 */

/**
 * DynamicArray function
 *
 * @param int $n
 * @param array $queries
 * @return array
 */
function dynamicArray(int $n, array $queries): array
{
    $lastAnswer = 0;
    $emptyList = [];
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        $emptyList[] = [];
    }

    foreach ($queries as $query) {
        $index = ($query[1] ^ $lastAnswer) % $n;
        if ($query[0] === 1) {
            $emptyList[$index] = array_merge($emptyList[$index], [$query[2]]);
        } else {
            $number = $query[2] % count($emptyList[$index]);
            $lastAnswer = $emptyList[$index][$number];
            $result[] = $lastAnswer;
        }
    }

    return $result;
}

echo "<pre>dynamicArray(2, [
            [1, 0, 5],
            [1, 1, 7],
            [1, 0, 3],
            [2, 1, 0],
            [2, 1, 1]
        ])\r\n";
var_dump(dynamicArray(2, [
    [1, 0, 5],
    [1, 1, 7],
    [1, 0, 3],
    [2, 1, 0],
    [2, 1, 1]
])); // [7, 3]
echo "</pre>";
