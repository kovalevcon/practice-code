# The maximum sum value of ranges

Source: [Link](https://www.codewars.com/kata/the-maximum-sum-value-of-ranges-simple-version/train/php)

## Task:

Given an array `$a` that contains some integers and a `$range` list such as `[[$start1, $end1], [$start2, $end2], ... ]`
where `$start(n)` and `$end(n)` are valid keys of the non-associative array `$a` and `$start(n)` is always guaranteed to
be strictly less than `$end(n)`. Your task is to calculate the sum value of each range (start index and end index are
both inclusive) and return the maximum sum value.

**Note:**

* arr/$a always has at least 5 elements;
* range/$range/ranges always has at least 1 element;
* All inputs are valid;
* This is a simple version, if you want some challenge, please try the challenge version.

**Sample Input**

```
[1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]]
```

**Sample Output**

```
6
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP (7.2)** language in `max-sum-of-range.php`.
* **Python 3** language in `max-sum-of-range.py`.