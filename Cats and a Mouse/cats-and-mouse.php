<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.10.18
 * Time: 18:18
 */

/**
 * Cats and mouse function
 *
 * @param int $x
 * @param int $y
 * @param int $z
 * @return string
 */
function catAndMouse(int $x, int $y, int $z): string
{
    $distA = $x > $z ? $z - $x : $x - $z;
    $distB = $y > $z ? $z - $y : $y - $z;

    if ($distA === $distB) {
        return 'Mouse C';
    }

    return 'Cat ' . ($distA < $distB ? 'B' : 'A');
}

echo "<pre>catAndMouse(1, 2, 3)\r\n";
echo catAndMouse(1, 2, 3); // 'Cat B'
echo "</pre>";

echo "<pre>catAndMouse(1, 3, 2)\r\n";
echo catAndMouse(1, 3, 2); // 'Mouse C'
echo "</pre>";