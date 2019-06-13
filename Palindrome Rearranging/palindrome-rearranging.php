<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 13.06.19
 * Time: 17:55
 */

/**
 * Given a string, find out if its characters can be rearranged to form a palindrome.
 *
 * @param string $inputString
 * @return bool
 */
function palindromeRearranging(string $inputString): bool
{
    return array_sum(array_map(function ($value) {
        return $value % 2;
    }, array_count_values(str_split($inputString)))) < 2;
}

echo "<pre>palindromeRearranging('abbcabb')\r\n";
var_dump(palindromeRearranging('abbcabb')); // true
echo "</pre>";

echo "<pre>palindromeRearranging('zaa')\r\n";
var_dump(palindromeRearranging('zaa')); // true
echo "</pre>";

echo "<pre>palindromeRearranging('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc')\r\n";
var_dump(palindromeRearranging('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc')); // false
echo "</pre>";