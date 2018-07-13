<?php
/**
 * Created by PhpStorm.
 * User: kovalevcon
 * Date: 13.07.18
 * Time: 11:13
 */

/**
 * Grading students function
 *
 * @param array $grades
 * @return array
 */
function gradingStudents(array $grades): array
{

    return array_map(function ($grade) {
        $multiple = $grade + (5 - $grade % 5);
        return $grade >= 38 && $multiple - $grade < 3 ? $multiple : $grade;
    }, $grades);
}

echo "<pre>gradingStudents([73, 67, 38, 33])\r\n";
var_dump(gradingStudents([73, 67, 38, 33])); // [75, 67, 40, 33]
echo "</pre>";