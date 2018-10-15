<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 15.10.18
 * Time: 13:54
 */

/**
 * Function get century from year
 *
 * @param int $year
 * @return int
 */
function centuryFromYear(int $year): int
{
    return $year % 100 ? intdiv($year, 100) + 1 : intdiv($year, 100);
}

echo "<pre>centuryFromYear(1900)\r\n";
echo centuryFromYear(1900); // 19
echo "</pre>";

echo "<pre>centuryFromYear(1724)\r\n";
echo centuryFromYear(1724); // 18
echo "</pre>";
