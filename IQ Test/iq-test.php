<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.05.19
 * Time: 18:22
 */

/**
 * Find out which one of the given numbers differs from the others
 *
 * @param string $numbers
 * @return int
 */
function iqTest(string $numbers): int
{
    /** @var array{int} $arrayInt */
    $arrayInt = array_map(function ($val) {
        return $val % 2;
    }, explode(' ', $numbers));
    /** @var int $diffValue */
    $diffValue = array_sum($arrayInt) === 1 ? 1 : 0;

    return array_search($diffValue, $arrayInt) + 1;
}

echo "<pre>iqTest(\"2 4 7 8 10\")\r\n";
echo iqTest("2 4 7 8 10"); // 3
echo "</pre>";

echo "<pre>iqTest(\"1 2 2\")\r\n";
echo iqTest("1 2 2"); // 1
echo "</pre>";

echo "<pre>iqTest(\"5 3 2\")\r\n";
echo iqTest("5 3 2"); // 3
echo "</pre>";