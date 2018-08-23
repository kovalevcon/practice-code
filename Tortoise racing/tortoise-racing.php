<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 23.08.18
 * Time: 18:44
 */

/**
 * Tortoise racing function
 *
 * @param int $v1
 * @param int $v2
 * @param int $g
 * @return array
 */
function race(int $v1, int $v2, int $g): array
{
    if ($v1 >= $v2) {
        return null;
    }

    $hours = $g / ($v2 - $v1);
    return [floor($hours), (floor($hours * 60) % 60), floor($hours * 3600) % 60];
}

echo "<pre>race(720, 850, 70)\r\n";
var_dump(race(720, 850, 70)); // [0, 32, 18]
echo "</pre>";
