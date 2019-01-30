<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 30.01.19
 * Time: 18:14
 */

/**
 * Complete the angryProfessor function below.
 *
 * @param int $k
 * @param array $a
 * @return string
 */
function angryProfessor(int $k, array $a): string
{
    $arrive = 0;
    for ($i = 0, $len = count($a); $i < $len; $i++) {
        if ($a[$i] <= 0) {
            $arrive++;
        }
    }

    return $arrive >= $k ? 'NO' : 'YES';
}

echo "<pre>angryProfessor(3, [-1, -3, 4, 2])\r\n";
echo angryProfessor(3, [-1, -3, 4, 2]); // YES
echo "</pre>";

echo "<pre>angryProfessor(2, [0, -1, 2, 1])\r\n";
echo angryProfessor(2, [0, -1, 2, 1]); // NO
echo "</pre>";

echo "<pre>angryProfessor(4, [-93, -86, 49, -62, -90, -63, 40, 72, 11, 67])\r\n";
echo angryProfessor(4, [-93, -86, 49, -62, -90, -63, 40, 72, 11, 67]); // NO
echo "</pre>";