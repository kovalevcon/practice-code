<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 19.10.18
 * Time: 16:33
 */

/**
 * Make array consecutive 2 function
 *
 * @param array $statues
 * @return int
 */
function makeArrayConsecutive2(array $statues): int
{
    return max($statues) - min($statues) - count($statues) + 1;
}

echo "<pre>makeArrayConsecutive2([6, 2, 3, 8])\r\n";
echo makeArrayConsecutive2([6, 2, 3, 8]); // 3
echo "</pre>";

echo "<pre>makeArrayConsecutive2([0, 3])\r\n";
echo makeArrayConsecutive2([0, 3]); // 2
echo "</pre>";

echo "<pre>makeArrayConsecutive2([5, 4, 6])\r\n";
echo makeArrayConsecutive2([5, 4, 6]); // 0
echo "</pre>";