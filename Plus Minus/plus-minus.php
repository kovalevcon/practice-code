<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 26.06.18
 * Time: 17:57
 */

/**
 * Print fraction of positive, negative or zero numbers in array
 *
 * @param $arr
 * @return void
 */
function plusMinus($arr)
{
    $result = [
      'positive' => 0,
      'negative' => 0,
      'zero' => 0,
    ];

    foreach($arr as $item) {
        if ($item > 0)
            ++$result['positive'];
        else if ($item < 0)
            ++$result['negative'];
        else ++$result['zero'];
    }

    $count = count($arr);
    foreach ($result as $item) {
        printf("%.06f\r\n", $count > 0 ? $item / $count : 0);
    }
}

plusMinus([-4, 3, -9, 0, 4, 1,]);
