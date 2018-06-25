<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.06.18
 * Time: 18:56
 */

/**
 * Reverse string via array function
 *
 * @param string $string
 * @return string
 */
function reverseV1($string) {
    return implode(" ", array_reverse(explode(" ", $string)));
}

/**
 * Reverse string via string
 *
 * @param string $string
 * @return string
 */
function reverseV2($string) {

    $word = $result = '';
    for ($i = 0; $i < strlen($string); $i++) {

        if ($string[$i] == ' ') {
            $result = ' ' . $word . $result;
            $word = '';
        } else {
            $word .= $string[$i];
        }
    }
    if (!empty($word)) {
        $result = $word . $result;
    }

    return $result;
}

$string = 'Hello  World';
printf("Test reverseV1:\n\r");
printf("World  Hello === %s\n\r", reverseV1($string));

printf("Test reverseV2:\n\r");
printf("World  Hello === %s\n\r", reverseV2($string));

