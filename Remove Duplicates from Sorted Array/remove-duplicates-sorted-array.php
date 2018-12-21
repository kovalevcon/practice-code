<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 21.12.18
 * Time: 18:55
 */

/**
 * Remove Duplicates from Sorted Array
 *
 * @param array $nums
 * @return int
 */
function removeDuplicates(array $nums): int
{
    if (!count($nums)) {
        return 0;
    }

    $i = 0;
    for ($j = 1, $len = count($nums) - 1; $j <= $len; $j++) {
        if ($nums[$i] !== $nums[$j]) {
            $i++;
            $nums[$i] = $nums[$j];
        }
    }

    return $i + 1;
}

echo "<pre>removeDuplicates([0, 0, 1, 1, 1, 2, 2, 3, 3, 4])\r\n";
echo removeDuplicates([0, 0, 1, 1, 1, 2, 2, 3, 3, 4]); // 5
echo "</pre>";

echo "<pre>removeDuplicates([1, 1, 2])\r\n";
echo removeDuplicates([1, 1, 2]); // 2
echo "</pre>";