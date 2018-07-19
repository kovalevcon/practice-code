<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 19.07.18
 * Time: 10:56
 */

/**
 * Count sum integer in string
 *
 * @param string $s
 * @return int
 */
function sum_of_integers_in_string(string $s): int
{
    return array_sum(explode(' ', preg_replace('/[^\d]/', ' ', $s)));
}

echo "<pre>sum_of_integers_in_string('The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog')\r\n";
echo sum_of_integers_in_string('The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog');
echo "</pre>";
