# Repeated String

Source: [Link](https://www.hackerrank.com/challenges/repeated-string/problem)

## Task:

Lilah has a string, `s`, of lowercase English letters that she repeated infinitely many times.

Given an integer, `n`, find and print the number of letter a's in the first letters of Lilah's infinite string.

For example, if the string `s = 'abcac'` and `n = 10`, the substring we consider is `abcacabcac`, the first characters
of her infinite string. There are `4` occurrences of a in the substring.

**Function Description**

Complete the `repeatedString` function in the editor below. It should return an integer representing the number of 
occurrences of a in the prefix of length `n` in the infinitely repeating string.

`repeatedString` has the following parameter(s):

* s: a string to repeat
* n: the number of characters to consider

**Input Format**

The first line contains a single string, `s`.
The second line contains an integer, `n`.

**Constraints**

* `1 <= |s| <= 100`
* `1 <= n <= pow(10, 12)`
* For `25` of the test cases, `n <= pow(10, 6)`.

**Output Format**

Print a single integer denoting the number of letter a's in the first `n` letters of the infinite string created 
by repeating `s` infinitely many times.

**Sample Input**

```
aba
10
```

**Sample Output**
```
7
```

## Tags:

* Fundamentals
* Algorithms
* Strings

## Solution:

* **PHP 7** language in `repeated-string.php`.
* **Python 3** language in `repeated-string.py`.
* **JavaScript ES6** language in `repeated-string.js`.
* **Go** language in `repeated-string.go`.