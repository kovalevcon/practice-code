<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 26.11.18
 * Time: 19:05
 */

/**
 * Check is valid parentheses
 *
 * @param string $s
 * @return bool
 */
function isValid(string $s): bool
{
    $brackets = [
        '{' => '}', '[' => ']', '(' => ')'
    ];
    $stack = [];

    foreach (str_split($s) as $cur) {
        if (isset($brackets[$cur])) {
            $stack[] = $brackets[$cur];
        } elseif (array_pop($stack) !== $cur) {
            return false;
        }
    }

    return !count($stack);
}

echo "<pre>isValid('()[]{}')\r\n";
var_dump(isValid('()[]{}')); // true
echo "</pre>";

echo "<pre>isValid('([)]')\r\n";
var_dump(isValid('([)]')); // false
echo "</pre>";