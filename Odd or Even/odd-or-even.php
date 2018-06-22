<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 22.06.18
 * Time: 18:44
 */

/**
 * Check sum array odd or even
 *
 * @param array $a
 * @return string
 */
function odd_or_even(array $a): string {
    return array_sum($a) % 2 ? 'odd' : 'even';
}

echo odd_or_even([0]); // return 'even'
echo odd_or_even([2, 5, 34, 6]); // return 'odd'
echo odd_or_even([0, -1, -5]); // return 'even'
