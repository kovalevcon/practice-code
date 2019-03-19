<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 19.03.19
 * Time: 18:25
 */

/**
 * Complete the stockList function in the editor below.
 *
 * @param array $listOfArt
 * @param array $listOfCat
 * @return string
 */
function stockList(array $listOfArt, array $listOfCat): string
{
    if (!count($listOfArt) || !count($listOfCat)) {
        return '';
    }

    $newList = [];

    foreach ($listOfArt as $item) {
        $arr = explode(" ", $item);
        $key = $arr[0][0];

        $newList[$key] = array_key_exists($key, $newList) ?  $newList[$key] + (int)$arr[1] : (int)$arr[1];
    }

    return implode(' - ', array_map(function ($val) use ($newList) {
        return "({$val} : " . (array_key_exists($val, $newList) ? $newList[$val] : 0) . ")";
    }, $listOfCat));
}

echo "<pre>stockList([\"BBAR 150\", \"CDXE 515\", \"BKWR 250\", \"BTSQ 890\", \"DRTY 600\"], [\"A\", \"B\", \"C\", \"D\"])\r\n";
// (A : 0) - (B : 1290) - (C : 515) - (D : 600)
echo stockList(["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B", "C", "D"]);
echo "</pre>";

echo "<pre>stockList([\"ABAR 200\", \"CDXE 500\", \"BKWR 250\", \"BTSQ 890\", \"DRTY 600\"], [\"A\", \"B\"])\r\n";
// (A : 200) - (B : 1140)
echo stockList(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]); // 33
echo "</pre>";