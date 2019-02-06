<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 06.02.19
 * Time: 14:26
 */

/**
 * Complete `Search Insert Position` function
 *
 * @param int[] $nums
 * @param int $target
 * @return int
 */
function searchInsert(array $nums, int $target)
{
    for ($i = 0, $len = count($nums); $i < $len; $i++) {
        if ($nums[$i] >= $target) {
            return $i;
        }
    }

    return $len;
}

echo "<pre>searchInsert([1, 3, 5, 6], 6)\r\n";
echo searchInsert([1, 3, 5, 6], 6); // 3
echo "</pre>";

echo "<pre>searchInsert([1, 3, 5, 6], 7)\r\n";
echo searchInsert([1, 3, 5, 6], 7); // 4
echo "</pre>";

echo "<pre>searchInsert([1, 3, 5, 6], 2)\r\n";
echo searchInsert([1, 3, 5, 6], 2); // 1
echo "</pre>";