<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 29.06.18
 * Time: 12:28
 */

/**
 * Build staircase
 *
 * @param int $n
 * @return void
 */
function staircase(int $n)
{
    for ($i = 1; $i <= $n; $i++) {
        printf("%s%s\r\n", str_repeat(' ', $n - $i), str_repeat('#', $i));
    }
}

echo "<pre>staircase(6)\r\n";
staircase(6);
echo "</pre>";
