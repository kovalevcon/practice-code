<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 20.02.19
 * Time: 19:10
 */

/**
 * Function to add border in a rectangular matrix
 *
 * @param array $picture
 * @return array
 */
function addBorder(array $picture): array
{
    return array_merge(
        [str_repeat('*', strlen($picture[0]) + 2)],
        array_map(function ($value) {
            return "*{$value}*";
        }, $picture),
        [str_repeat('*', strlen($picture[0]) + 2)]
    );
}

echo "<pre>addBorder([\"abc\", \"ded\"]\r\n";
var_dump(addBorder(["abc", "ded"])); // ["*****", "*abc*", "*ded*", "*****"]
echo "</pre>";

echo "<pre>addBorder([\"a\"]\r\n";
var_dump(addBorder(["a"])); // ["***", "*a*", "***"]
echo "</pre>";

echo "<pre>addBorder([\"aa\", \"**\", \"zz\"]\r\n";
var_dump(addBorder(["aa", "**", "zz"])); // ["****", "*aa*", "****", "*zz*", "****"]
echo "</pre>";