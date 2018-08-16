<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 16.08.18
 * Time: 17:49
 */

/**
 * Check equals counts char `o` and `x`
 *
 * @param string $s
 * @return bool
 */
function xo(string $s): bool
{
    $s = strtolower($s);
    return substr_count($s, 'o') == substr_count($s, 'x');
}

echo "<pre>xo('xooxx')\r\n";
var_dump(xo('xooxx')); // false
echo "</pre>";

echo "<pre>xo('ooxx')\r\n";
var_dump(xo('ooxx')); // true
echo "</pre>";
