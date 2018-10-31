<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 31.10.18
 * Time: 15:41
 */

/**
 * Removed vowels function
 *
 * @param string $str
 * @return string
 */
function disemvowel(string $str): string
{
    return preg_replace('/[aeiuo]/i', '', $str);
}

echo "<pre>disemvowel('This website is for losers LOL!')\r\n";
echo disemvowel('This website is for losers LOL!'); // 'Ths wbst s fr lsrs LL!'
echo "</pre>";

echo "<pre>disemvowel('The test is OK!')\r\n";
echo disemvowel('The test is OK!'); // 'Th tst s K!'
echo "</pre>";