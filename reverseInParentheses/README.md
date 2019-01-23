# reverseInParentheses

Source: [Link](https://app.codesignal.com/arcade/intro/level-3/9DgaPsE2a7M6M2Hu6/description)

## Task:

Write a function that reverses characters in (possibly nested) parentheses in the input string.

Input strings will always be well-formed with matching `()`s.

**Example**

* For `inputString = "(bar)"`, the output should be
    `reverseInParentheses(inputString) = "rab"`;
    
* For `inputString = "foo(bar)baz"`, the output should be
    `reverseInParentheses(inputString) = "foorabbaz"`;
    
* For `inputString = "foo(bar)baz(blim)"`, the output should be
    `reverseInParentheses(inputString) = "foorabbazmilb"`;
    
* For `inputString = "foo(bar(baz))blim"`, the output should be
    `reverseInParentheses(inputString) = "foobazrabblim"`.
    Because `"foo(bar(baz))blim"` becomes `"foo(barzab)blim"` and then `"foobazrabblim"`.

**Input/Output**

* `[execution time limit]` 4 seconds (php)

* `[input]` string inputString

    A string consisting of lowercase English letters and the characters `(` and `)`.
    It is guaranteed that all parentheses in `inputString` form a regular bracket sequence.

    Guaranteed constraints:
    `0 ≤ inputString.length ≤ 50`.

* `[output]` string
    * Return `inputString`, with all the characters that were in parentheses reversed.

**Sample Input**

```
(bar)
```

**Sample Output**
```
rab
```

## Tags:

* Fundamentals
* Algorithms
* Strings

## Solution:

* **PHP 7** language in `reverse-in-parentheses.php`.
* **Python 3** language in `reverse-in-parentheses.py`.
* **JavaScript ES6** language in `reverse-in-parentheses.js`.