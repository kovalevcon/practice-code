<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 26.06.18
 * Time: 11:51
 */

/**
 * Find appears an odd integer in array
 *
 * @param array $seq
 * @return int
 */
function findIt(array $seq) : int
{
    return key(
        array_filter(array_count_values($seq), function($var) {
            return $var & 1;
        })
    );
}

echo findIt([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]); // 5
echo findIt([1,1,2,-2,5,2,4,4,-1,-2,5]); // -1
echo findIt([20,1,1,2,2,3,3,5,5,4,20,4,5]); // 5
echo findIt([10]); // 10
echo findIt([1,1,1,1,1,1,10,1,1,1,1]); // 10