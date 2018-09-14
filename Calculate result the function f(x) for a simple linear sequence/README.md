# Calculate result the function f(x) for a simple linear sequence

Source: [Link](https://www.codewars.com/kata/calculate-the-function-f-x-for-a-simple-linear-sequence-medium/train/python)

## Task:

This is a follow-up from my task which can be found here: 
[Link](https://github.com/kovalevcon/practice-code/tree/master/Calculate%20the%20function%20f(x)%20for%20a%20simple%20linear%20sequence)

This time, for any given linear sequence, calculate the function `[f(x)]` and return it as a function in Javascript 
or Lambda/Block in Ruby.

For example:
```
get_function([0, 1, 2, 3, 4])(5) => 5
get_function([0, 3, 6, 9, 12])(10) => 30
get_function([1, 4, 7, 10, 13])(20) => 61
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
5
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP (7.2)** language in `find-simple-linear-sequence-result.php`.
* **Python 3** language in `find-simple-linear-sequence-result.py`.