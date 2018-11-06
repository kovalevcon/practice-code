# Forming a Magic Square

Source: [Link](https://www.hackerrank.com/challenges/magic-square-forming/problem)

## Task:

We define a magic square to be an `n x n` matrix of distinct positive integers from `1` to `n**2` where the sum of 
any row, column, or diagonal of length `n` is always equal to the same number: the magic constant.

You will be given a `3 x 3` matrix `s` of integers in the inclusive range `[1, 9]`. We can convert any digit `a` 
to any other digit `b` in the range `[1, 9]` at cost of `|a - b|`. Given `s`, convert it into a magic square at 
minimal cost. Print this cost on a new line.

**Note**: The resulting magic square must contain distinct integers in the inclusive range `[1, 9]`.

For example, we start with the following matrix `s`:

```
5 3 4
1 5 8
6 4 2
```

We can convert it to the following magic square:

```
8 3 4
1 5 9
6 7 2
```

This took three replacements at a cost of `|5 - 8| + |8 - 9| + |4 - 7| = 7`.

**Function Description**

Complete the formingMagicSquare function in the editor below. It should return an integer that represents the minimal
total cost of converting the input square to a magic square.

`formingMagicSquare` has the following parameter(s):

* s: a `3 x 3` array of integers

**Input Format**

Each of the lines contains three space-separated integers of row `s[i]`.

**Constraints**

* `s[i][j] range(1, 9)`

**Output Format**

Print an integer denoting the minimum cost of turning matrix `s` into a magic square.

**Sample Input**

```
4 9 2
3 5 7
8 1 5
```

**Sample Output**
```
1
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP 7** language in `forming-magic-square.php`.
* **Python 3** language in `forming-magic-square.py`.
* **JavaScript ES6** language in `forming-magic-square.js`.