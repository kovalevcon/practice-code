<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 07.09.18
 * Time: 18:04
 */

/**
 * Count valleys function
 *
 * @param int $n
 * @param string $s
 * @return int
 */
function countingValleys(int $n, string $s): int
{
    $count = $seaLevel = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($s[$i] === 'U') {
            ++$seaLevel;
            if ($seaLevel === 0) {
                ++$count;
            }
        } else {
            --$seaLevel;
        }
    }

    return $count;
}

echo "<pre>countingValleys(8, 'UDDDUDUU')\r\n";
echo countingValleys(8, 'UDDDUDUU'); // 1
echo "</pre>";

echo "<pre>countingValleys(12, 'DDUUDDUDUUUD')\r\n";
echo countingValleys(12, 'DDUUDDUDUUUD'); // 2
echo "</pre>";