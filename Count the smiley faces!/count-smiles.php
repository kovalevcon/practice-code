<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 17.07.18
 * Time: 10:39
 */

/**
 * Count smileys
 *
 * @param array $arr
 * @return int
 */
function count_smileys(array $arr): int {
    return count(array_filter($arr, function ($v) {
            return preg_match('/^[:;]{1}[-~]?[)D]{1}$/', $v);
        })
    );
}

echo "<pre>count_smileys([':)', ';(', ';}', ':-D'])\r\n";
echo count_smileys([':)', ';(', ';}', ':-D']); // 2
echo "</pre>";

echo "<pre>count_smileys([';D', ':-(', ':-)', ';~)'])\r\n";
echo count_smileys([';D', ':-(', ':-)', ';~)']); // 3
echo "</pre>";

echo "<pre>count_smileys([';]', ':[', ';*', ':$', ';-D'])\r\n";
echo count_smileys([';]', ':[', ';*', ':$', ';-D']); // 1
echo "</pre>";