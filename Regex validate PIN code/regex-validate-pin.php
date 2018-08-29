<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 29.08.18
 * Time: 10:20
 */

/**
 * Validation pin function
 *
 * @param string $pin
 * @return bool
 */
function validate_pin(string $pin): bool
{
    return !!(in_array(strlen($pin), [4, 6]) && preg_match('/^[\d]+$/', $pin));
}

echo "<pre>validate_pin(\"1234\")\r\n";
var_dump(validate_pin("1234")); // true
echo "</pre>";

echo "<pre>validate_pin(\"1234s\")\r\n";
var_dump(validate_pin("1234s")); // false
echo "</pre>";