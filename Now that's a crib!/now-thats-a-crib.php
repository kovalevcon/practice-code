<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 21.11.18
 * Time: 12:00
 */

/**
 * Build a penthouse function
 *
 * @param int $n
 * @return string
 */
function my_crib(int $n): string
{
    $count = $n * 2 + 1;
    $repeat = $n * 2;
    $maxWidth = $count + ($repeat * 2);
    $shortLength = ($maxWidth - $count) / 2 - 1;

    $spaces = str_repeat(' ', $n * 2);
    $underscores = str_repeat('_', $count);
    $maxSpaces = str_repeat(' ', $maxWidth - 2);
    $shortSpaces = str_repeat(' ', $shortLength);
    $shortUnderscores = str_repeat("_", $shortLength);

    $crib = sprintf('%s%s%s\n',$spaces, $underscores, $spaces);
    for($i = 0; $i < $repeat; $i++) {
        $crib .= sprintf('%s/%s\%s\n',
            str_repeat(' ', $repeat - $i - 1),
            str_repeat('_', $count + ($i * 2)),
            str_repeat(' ', $repeat - $i - 1)
        );
    }

    $crib .= str_repeat(sprintf('|%s|\n', $maxSpaces), $n - 1);
    $crib .= sprintf('|%s%s%s|\n', $spaces, $shortUnderscores, $spaces);
    $crib .= str_repeat(sprintf('|%s|%s|%s|\n', $shortSpaces, $shortSpaces, $shortSpaces), $n - 1);
    $crib .= sprintf('|%s|%s|%s|', $shortUnderscores, $shortUnderscores, $shortUnderscores);

    return $crib;
}

echo "<pre>my_crib(1)\r\n";
echo my_crib(1); // '  ___  \n /___\ \n/_____\\n|  _  |\n|_|_|_|'
echo "</pre>";

echo "<pre>my_crib(2)\r\n";
echo my_crib(2); // '    _____    \n   /_____\   \n  /_______\  \n /_________\ \n/___________\\n|           |\n|    ___    |\n|   |   |   |\n|___|___|___|'
echo "</pre>";