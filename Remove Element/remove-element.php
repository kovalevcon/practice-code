<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 04.01.19
 * Time: 18:38
 */

/**
 * Remove element of all instances in array
 *
 * @param array $nums
 * @param int $val
 * @return int
 */
function removeElement(array $nums, int $val): int
{
    $i = 0;
    for ($j = 0, $len = count($nums); $j < $len; $j++) {
        if ($nums[$j] !== $val) {
            $nums[$i] = $nums[$j];
            ++$i;
        }
    }

    return $i;
}

echo "<pre>removeElement([3, 2, 2, 3], 3)\r\n";
echo removeElement([3, 2, 2, 3], 3); // 2
echo "</pre>";

echo "<pre>removeElement([0, 1, 2, 2, 3, 0, 4, 2], 2)\r\n";
echo removeElement([0, 1, 2, 2, 3, 0, 4, 2], 2); // 5
echo "</pre>";