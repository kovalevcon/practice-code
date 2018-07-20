<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 20.07.18
 * Time: 14:55
 */

/**
 * Kangaroo function
 *
 * @param int $x1
 * @param int $v1
 * @param int $x2
 * @param int $v2
 * @return string
 */
function kangaroo(int $x1, int $v1, int $x2, int $v2): string
{
    if (($x2 > $x1 && $v2 > $v1) || ($x1 > $x2 && $v1 > $v2) || ($x1 == $x2 || $v1 == $v2)) {
        return 'NO';
    } elseif (($x1 - $x2) % ($v2 - $v1) == 0) {
        return 'YES';
    }

    return 'NO';
}

echo "<pre>kangaroo(0, 3, 4, 2)\r\n";
echo kangaroo(0, 3, 4, 2);
echo "</pre>";
