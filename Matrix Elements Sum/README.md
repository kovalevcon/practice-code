# Matrix Elements Sum

Source: [Link](https://app.codesignal.com/arcade/intro/level-2/xskq4ZxLyqQMCLshr/description)

## Task:

After they became famous, the CodeBots all decided to move to a new building and live together. The building is 
represented by a rectangular `matrix` of rooms. Each cell in the `matrix` contains an integer that represents the price 
of the room. Some rooms are free (their cost is `0`), but that's probably because they are haunted, so all the bots are
afraid of them. That is why any room that is free or is located anywhere below a free room in the same column is not
considered suitable for the bots to live in.

Help the bots calculate the total price of all the rooms that are suitable for them.

**Example**

For

```
matrix = [[0, 1, 1, 2], 
          [0, 5, 0, 0], 
          [2, 0, 3, 3]]
```

the output should be:

`matrixElementsSum(matrix) = 9.`

Here's the rooms matrix with unsuitable rooms marked with `'x'`:

```
[[x, 1, 1, 2], 
 [x, 5, x, x], 
 [x, x, x, x]]
```

Thus, the answer is `1 + 5 + 1 + 2 = 9`.

**Input/Output**



* [execution time limit] 4 seconds (py3)

* [input] array.array.integer matrix

    A 2-dimensional array of integers representing a rectangular matrix of the building.

    Guaranteed constraints:
    
    ```
    1 ≤ matrix.length ≤ 5`,
    1 ≤ matrix[i].length ≤ 5`,
    0 ≤ matrix[i][j] ≤ 10`.
    ```
* [output] integer
    * The total price of all the rooms that are suitable for the CodeBots to live in.


**Sample Input**

```
[ 
  [0, 1, 1, 2], 
  [0, 5, 0, 0], 
  [2, 0, 3, 3]
]
```

**Sample Output**
```
9
```

## Tags:

* Fundamentals
* Algorithms
* Arrays

## Solution:

* **PHP 7** language in `matrix-elements-sum.php`.
* **Python 3** language in `matrix-elements-sum.py`.
* **JavaScript ES6** language in `matrix-elements-sum.js`.