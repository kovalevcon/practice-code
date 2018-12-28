<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 28.12.18
 * Time: 14:48
 */

/**
 * Reverse the strings contained in each pair of matching parentheses
 *
 * @param string $s
 * @return string
 */
function reverseParentheses(string $s): string
{
    $start = $end = 0;
    for ($i = 0, $length = strlen($s); $i < $length; $i++) {
        if ($s[$i] === '(') {
            $start = $i;
        } elseif ($s[$i] === ')') {
            $end = $i;
            return reverseParentheses(
                substr($s, 0, $start) .
                strrev(substr($s, $start + 1, $end - $start - 1)) .
                substr($s, $end + 1)
            );
        }
    }

    return $s;
}

echo "<pre>reverseParentheses('Code(Cha(lle)nge)')\r\n";
echo reverseParentheses('Code(Cha(lle)nge)'); // 'CodeegnlleahC'
echo "</pre>";

echo "<pre>reverseParentheses('The ((quick (brown) (fox) jumps over the lazy) dog)')\r\n";
echo reverseParentheses('The ((quick (brown) (fox) jumps over the lazy) dog)'); // 'The god quick nworb xof jumps over the lazy'
echo "</pre>";