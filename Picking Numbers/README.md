# Picking Numbers

Source: [Link](https://www.hackerrank.com/challenges/picking-numbers/problem)

## Task:

Given an array of integers, find and print the maximum number of integers you can select from the array such that the
absolute difference between any two of the chosen integers is less than or equal to `1`. For example, if your array is
`a = [1, 1, 2, 2, 4, 4, 5, 5, 5]`, you can create two subarrays meeting the criterion: `[1, 1, 2, 2]` and 
`[4, 4, 5, 5, 5]`. The maximum length subarray has `5` elements.

**Function Description**

Complete the pickingNumbers function in the editor below. It should return an integer that represents the length of 
the longest array that can be created.

`pickingNumbers` has the following parameter(s):

* a: an array of integers

**Input Format**

The first line contains a single integer `n`, the size of the array `a`.
The second line contains `n` space-separated integers `a[i]`.

**Constraints**

* `2 <= n <= 100`
* `0 < a[i] < 100`
* The answer will be `>= 2`. 

**Output Format**

A single integer denoting the maximum number of integers you can choose from the array such that the absolute 
difference between any two of the chosen integers is `<= 1`. 

**Sample Input**

```
6
4 6 5 3 3 1
```

**Sample Output**
```
3
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP 7** language in `picking-numbers.php`.
* **Python 3** language in `picking-numbers.py`.
* **JavaScript ES6** language in `picking-numbers.js`.