<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.03.19
 * Time: 19:33
 */

/**
 * Function find length of last word
 *
 * @param string $s
 * @return int
 */
function lengthOfLastWord(string $s) : int
{
    $lastWord = function ($s) {
        preg_match_all('/[a-z]+/i', $s, $matches);
        return strlen(array_pop($matches[0]));
    };
    return preg_match('/[a-z]+/i', $s) ? $lastWord($s) : 0;
}

echo "<pre>lengthOfLastWord('Hello World')\r\n";
echo lengthOfLastWord('Hello World'); // 5
echo "</pre>";

echo "<pre>lengthOfLastWord(' Hello World')\r\n";
echo lengthOfLastWord(' Hello World'); // 5
echo "</pre>";

echo "<pre>lengthOfLastWord(' ')\r\n";
echo lengthOfLastWord(' '); // 0
echo "</pre>";

echo "<pre>lengthOfLastWord('')\r\n";
echo lengthOfLastWord(''); // 0
echo "</pre>";