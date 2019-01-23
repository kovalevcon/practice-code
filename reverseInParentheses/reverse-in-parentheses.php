<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 23.01.19
 * Time: 18:18
 */

/**
 * Function that reverses characters in (possibly nested) parentheses in the input string
 *
 * @param string $inputString
 * @return string
 */
function reverseInParentheses(string $inputString): string
{
    if (!$inputString || $inputString === '()') {
        return '';
    } elseif (strpos($inputString, '(') !== false && strpos($inputString, ')') !== false) {
        return reverseInParentheses(preg_replace_callback('/\(([^()]*)\)/', function ($match) {
            return strrev($match[1]);
        }, $inputString));
    }

    return $inputString;
}

echo "<pre>reverseInParentheses('(bar)')\r\n";
echo reverseInParentheses('(bar)'); // rab
echo "</pre>";

echo "<pre>reverseInParentheses('foo(bar)baz(blim)')\r\n";
echo reverseInParentheses('foo(bar)baz(blim)'); // foorabbazmilb
echo "</pre>";

echo "<pre>reverseInParentheses('foo(bar(baz))blim')\r\n";
echo reverseInParentheses('foo(bar(baz))blim'); // foobazrabblim
echo "</pre>";