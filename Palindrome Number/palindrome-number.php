<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 11.10.18
 * Time: 17:48
 */

/**
 * Function check is integer has palindrome
 *
 * @param int $num
 * @return bool
 */
function isPalindrome(int $num): bool
{
    if ($num < 0) {
        return false;
    } elseif (in_array($num, range(0, 9))) {
        return true;
    }

    $temp = $num;
    $reverse = "";
    while ($temp > 0) {
        $reverse .= $temp % 10;
        $temp = intdiv($temp, 10);
    }

    return $num == $reverse;
}

echo "<pre>isPalindrome(123)\r\n";
var_dump(isPalindrome(123)); // false
echo "</pre>";

echo "<pre>isPalindrome(121)\r\n";
var_dump(isPalindrome(121)); // true
echo "</pre>";
