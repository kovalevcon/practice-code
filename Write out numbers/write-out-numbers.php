<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 31.07.18
 * Time: 18:24
 */

/**
 * Write number integer to string
 *
 * @param int $n
 * @return string
 */
function number2words(int $n): string
{
    if ($n == 0) {
        return 'zero';
    }

    $textNumber = [];
    $start = 1000;
    while ($n > 0) {
        $count = intval($n / $start);
        if ($count) {
            if ($start == 10) {
                $textNumber[] = numberToText($n);
                break;
            } else {
                $textNumber[] = numberToText($count, $start);
            }
        }
        $n -= $count * $start;
        $start /= 10;
    }

    return implode(' ', $textNumber);
}

/**
 * Convert current number to string
 *
 * @param int $n
 * @param null $unit
 * @return string
 */
function numberToText(int $n, $unit = null): string
{
    $dict = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten',
        11 => 'eleven',
        12 => 'twelve',
        13 => 'thirteen',
        14 => 'fourteen',
        15 => 'fifteen',
        16 => 'sixteen',
        17 => 'seventeen',
        18 => 'eighteen',
        19 => 'nineteen',
        20 => 'twenty',
        30 => 'thirty',
        40 => 'forty',
        50 => 'fifty',
        60 => 'sixty',
        70 => 'seventy',
        80 => 'eighty',
        90 => 'ninety',
        100 => 'hundred',
        1000 => 'thousand',
    ];

    if ($n == 0) {
        return '';
    }

    $result = $dict[$n] ?? '';

    if (!$result) {
        if ($n > 100) {
            $result = numberToText(($n - $n % 100) / 100, 100) .
                ($n % 100 ? ' ' . numberToText($n % 100) : '');
        } elseif ($n > 10) {
            $result .= numberToText($n - $n % 10) .
                ($n % 10 ? '-' . numberToText($n % 10) : '');
        }
    }

    if (in_array($unit, [100, 1000])) {
        if ($n == 100 || $n == 1000) {
            $result = numberToText(1) . " $result";
        }
        $result .= " {$dict[$unit]}";
    }

    return $result;
}

echo "<pre>number2words(888888)\r\n";
echo number2words(888888);
echo "</pre>";
