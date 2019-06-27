<?php
declare(strict_types=1);

/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 27.06.19
 * Time: 19:26
 */

/**
 * Return true if and only if we can swap two letters in A so that the result equals B.
 *
 * @param string $a
 * @param string $b
 * @return bool
 */
function buddyStrings(string $a, string $b): bool
{
    if (strlen($a) !== strlen($b)) {
        return false;
    }

    if (strcmp($a, $b) === 0) {
        $set = [];
        foreach (str_split($a) as $item) {
            if (array_key_exists($item, $set)) {
                return true;
            }
            $set[$item] = null;
        }
        return false;
    }

    $pairs = [];
    for ($i = 0, $length = strlen($a); $i < $length; $i++) {
        if ($a[$i] !== $b[$i]) {
            $pairs[] = [$a[$i], $b[$i]];
        }
        if (count($pairs) > 2) {
            return false;
        }
    }

    return count($pairs) === 2 && $pairs[0] === array_reverse($pairs[1]);
}

echo "<pre>buddyStrings('ab', 'ba')\r\n";
var_dump(buddyStrings('ab', 'ba')); // true
echo "</pre>";

echo "<pre>buddyStrings('ab', 'ab')\r\n";
var_dump(buddyStrings('ab', 'ab')); // false
echo "</pre>";

echo "<pre>buddyStrings('aaaaaaabc', 'aaaaaaacb')\r\n";
var_dump(buddyStrings('aaaaaaabc', 'aaaaaaacb')); // true
echo "</pre>";