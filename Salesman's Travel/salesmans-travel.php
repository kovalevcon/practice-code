<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 13.08.18
 * Time: 16:00
 */

/**
 * Find address by zip code
 *
 * @param string $r
 * @param string $zipCode
 * @return string
 */
function travel(string $r, string $zipCode): string
{
//        preg_match_all("/(\d+) ([^,]+)? {$zipCode},/", "{$r},", $matches);
//        return (empty($zipCode) || empty($matches[2])) ? "{$zipCode}:/" : "{$zipCode}:" .
//            implode(',', $matches[2]) . '/' . implode(',', $matches[1]);

    if (strlen($zipCode) != 8) {
        return "{$zipCode}:/";
    }

    $streetAndTown = $houseNumber = [];
    $result = "{$zipCode}:";
    $addresses = explode(',', $r);
    foreach ($addresses as $address) {
        $arr = explode(' ', $address);
        if ($zipCode == implode(' ', array_slice($arr, -2, 2))) {
            $streetAndTown[] = implode(' ', array_slice($arr, 1, count($arr) - 3));
            $houseNumber[] = $arr[0];
        }
    }

    return $streetAndTown && $houseNumber ?
        $result . implode(',', $streetAndTown) . '/' . implode(',', $houseNumber) : "{$result}/";
}

echo "<pre>travel('123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville NY 56432', 'OH 43071')\r\n";
echo travel('123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville NY 56432', 'OH 43071'); // OH 43071:Main Street St. Louisville,Main Long Road St. Louisville/123,432
echo "</pre>";
