<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 21.06.19
 * Time: 18:54
 */

/**
 * Print the number of letter a's in the first letters of infinite string
 *
 * @param string $s
 * @param int    $n
 * @return int
 */
function repeatedString(string $s, int $n): int
{
    if ($s === 'a') {
        return $n;
    } elseif (strpos($s, 'a') === false) {
        return 0;
    }

    return (count_chars($s, 0)[97] * (int)($n / strlen($s)))
        + count_chars(mb_substr($s, 0, $n % strlen($s)), 0)[97];
}

echo "<pre>repeatedString('abcac', 10)\r\n";
echo repeatedString('abcac', 10); // 4
echo "</pre>";

echo "<pre>repeatedString('aba', 10)\r\n";
echo repeatedString('aba', 10); // 7
echo "</pre>";

echo "<pre>repeatedString('a', 1000000000000)\r\n";
echo repeatedString('a', 1000000000000); // 1000000000000
echo "</pre>";