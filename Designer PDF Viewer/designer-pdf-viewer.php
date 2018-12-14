<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 14.12.18
 * Time: 16:59
 */

/**
 * Find integer representing the size of the highlighted area.
 *
 * @param array $h
 * @param string $word
 * @return int
 */
function designerPdfViewer(array $h, string $word): int
{
    $alphabet = [];
    for($i = 97; $i < 123; $i++) {
        $alphabet[chr($i)] = array_shift($h);
    }

    $heights = [];
    foreach (str_split($word) as $v) {
        $heights[] = $alphabet[$v];
    }

    return max($heights) * strlen($word);
}

echo "<pre>designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc')\r\n";
echo designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc'); // 9
echo "</pre>";

echo "<pre>designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba')\r\n";
echo designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba'); // 28
echo "</pre>";