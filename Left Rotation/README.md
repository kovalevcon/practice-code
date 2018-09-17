# Left Rotation

Source: [Link](https://www.hackerrank.com/challenges/array-left-rotation/problem)

## Task:

A left rotation operation on an array of size `n` shifts each of the array's elements `1` unit to the left. For example,
if `2` left rotations are performed on array `[1, 2, 3, 4, 5]`, then the array would become `[3, 4, 5, 1, 2]`.

Given an array of `n` integers and a number, `d`, perform `d` left rotations on the array. Then print the updated array
as a single line of space-separated integers.

**Input format**

The first line contains two space-separated integers denoting the respective values of `n` (the number of integers) and
`d` (the number of left rotations you must perform).

The second line contains `n` space-separated integers describing the respective elements of the array's initial state.

**Constraints**

* `1 <= n <= pow(10, 5)`
* `1 <= d <= n`
* `1 <= a[i] <= pow(10, 6)`

**Output format**

Print a single line of `n` space-separated integers denoting the final state of the array after performing `d` left
rotations.

**Sample Input**

```
5 4
1 2 3 4 5
```

**Sample Output**

```
5 1 2 3 4
```

## Tags:

* Data structures
* Arrays
* Fundamentals

## Solution:

* **PHP (7.2)** language in `left-rotation.php`.
* **Python 3** language in `left-rotation.py`.