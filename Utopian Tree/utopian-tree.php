<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 09.01.19
 * Time: 18:49
 */

/**
 * Complete the utopianTree function
 *
 * @param int $n
 * @return int
 */
function utopianTree(int $n): int
{
    $height = 1;
    for ($i = 1; $i <= $n; $i++) {
        if ($i & 1) {
            $height *= 2;
        } else {
            $height++;
        }
    }

    return $height;
}

echo "<pre>utopianTree(0)\r\n";
echo utopianTree(0); // 1
echo "</pre>";

echo "<pre>utopianTree(1)\r\n";
echo utopianTree(1); // 2
echo "</pre>";

echo "<pre>utopianTree(4)\r\n";
echo utopianTree(4); // 7
echo "</pre>";