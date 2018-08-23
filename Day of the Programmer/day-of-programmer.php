<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 23.08.18
 * Time: 17:23
 */

/**
 * Find day of the programmer
 *
 * @param int $year
 * @return string
 */
function dayOfProgrammer(int $year): string
{
    if ($year == 1918) {
        return "26.09.{$year}";
    }

    return ($year < 1918 && $year % 4 == 0)
    || ($year > 1918 && (($year % 400 == 0) || ($year % 100 !== 0 && $year % 4 == 0)))
        ? "12.09.{$year}" : "13.09.{$year}";
}

echo "<pre>dayOfProgrammer(2017)\r\n";
echo dayOfProgrammer(2017); // "13.09.2017"
echo "</pre>";
