# Calculate the function f(x) for a simple linear sequence

Source: [Link](http://www.codewars.com/kata/calculate-the-function-f-x-for-a-simple-linear-sequence-easy/python)

## Task:

For any given linear sequence, calculate the function `[f(x)]` and return it as a string.

For example:
```
get_function([0, 1, 2, 3, 4]) => "f(x) = x"
get_function([0, 3, 6, 9, 12]) => "f(x) = 3x"
get_function([1, 4, 7, 10, 13]) => "f(x) = 3x + 1"
```

Assumptions for this kata are:

* the sequence argument will always contain 5 values equal to f(0) - f(4).
* the function will always be in the format "nx +/- m", 'x +/- m', 'nx', 'x' or 'm'
* if a non-linear sequence simply return 'Non-linear sequence' or Nothing in Haskell.

**Sample Input**
```
[0, 1, 2, 3, 4]
```

**Sample Output**
```
f(x) = x
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP (7.2)** language in `find-simple-linear-sequence.php`.
* **Python 3** language in `find-simple-linear-sequence.py`.