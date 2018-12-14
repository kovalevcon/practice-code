<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 14.12.18
 * Time: 18:18
 */

/**
 * Find a new sorted string, the longest possible, containing distinct letters
 *
 * @param string $a
 * @param string $b
 * @return string
 */
function longest(string $a, string $b): string
{
    $arr = array_unique(str_split("$a$b"));
    sort($arr);
    return implode("", $arr);
}

echo "<pre>longest('aretheyhere', 'yestheyarehere')\r\n";
echo longest('aretheyhere', 'yestheyarehere'); // 'aehrsty'
echo "</pre>";

echo "<pre>longest('loopingisfunbutdangerous', 'lessdangerousthancoding')\r\n";
echo longest('loopingisfunbutdangerous', 'lessdangerousthancoding'); // 'abcdefghilnoprstu'
echo "</pre>";