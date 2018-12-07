# Sort by Height

Source: [Link](https://app.codesignal.com/arcade/intro/level-3/D6qmdBL2NYz49XHwM/description?solutionId=H4v6MDyAFb4jcRxHu)

## Task:

Some people are standing in a row in a park. There are trees between them which cannot be moved. Your task is to 
rearrange the people by their heights in a non-descending order without moving the trees. People can be very tall!

**Example:**

For `a = [-1, 150, 190, 170, -1, -1, 160, 180]`, the output should be
`sortByHeight(a) = [-1, 150, 160, 170, -1, -1, 180, 190]`.

**Input/Output**

* `[execution time limit]` 4 seconds (php)

* `[input]` array.integer a

    If `a[i] = -1`, then the `Ith` position is occupied by a tree. Otherwise `a[i]` is the height of a person standing
    in the `Ith` position.

    Guaranteed constraints:
    
    `1 ≤ a.length ≤ 1000,`
    
    `-1 ≤ a[i] ≤ 1000.`

* `[output]` array.integer
    * Sorted array a with all the trees untouched.

**Sample Input**

```
[-1, 150, 190, 170, -1, -1, 160, 180]
```

**Sample Output**

```
[-1, 150, 160, 170, -1, -1, 180, 190]
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP 7** language in `sort-by-height.php`.
* **Python 3** language in `sort-by-height.py`.
* **JavaScript ES6** language in `sort-by-height.js`.