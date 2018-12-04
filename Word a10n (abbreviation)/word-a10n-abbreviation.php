<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 04.12.18
 * Time: 14:53
 */

/**
 * Word a10n (abbreviation) function
 *
 * @param string $s
 * @return string
 */
function abbreviate(string $s): string
{
    return preg_replace_callback('/[a-z]{4,}/i', function ($matches) {
        return sprintf("%s%d%s", $matches[0][0], strlen($matches[0]) - 2, $matches[0][-1]);
    }, $s);
}

echo "<pre>hurdleRace('elephant-rides are really fun!')\r\n";
echo abbreviate('elephant-rides are really fun!'); // e6t-r3s are r4y fun!
echo "</pre>";

echo "<pre>hurdleRace('internationalization')\r\n";
echo abbreviate('internationalization'); // i18n
echo "</pre>";