# Apple and Orange

Source: [Link](https://www.hackerrank.com/challenges/apple-and-orange/problem)

## Task:

Sam's house has an apple tree and an orange tree that yield an abundance of fruit.
In the diagram below, the red region denotes his house, where `s` is the start point, and `t` is the endpoint.
The apple tree is to the left of his house, and the orange tree is to its right.
You can assume the trees are located on a single point, where the apple tree is at point `a`, and the orange tree
is at point `b`.

When a fruit falls from its tree, it lands `d` units of distance from its tree of origin along the `x`-axis. 
A negative value of `d` means the fruit fell units to the tree's left, and a positive value of `d` means it falls `d`
units to the tree's right.

Complete the function countApplesAndOranges, where:

* `s` Starting point of Sam's house location.
* `t` Ending location of Sam's house location.
* `a` Location of the Apple tree.
* `b` Location of the Orange tree.
* `m` Number of apples that fell from the tree.
* `apples` Distance at which each apple falls from the tree.
* `n` Number of oranges that fell from the tree.
* `oranges` Distance at which each orange falls from the tree.

Given the value of `d` for `m` apples and oranges, can you determine how many apples and oranges will fall on Sam's
house (i.e., in the inclusive range `[s,t]`)? Print the number of apples that fall on Sam's house as your first
line of output, then print the number of oranges that fall on Sam's house as your second line of output.

**Input Format**

The first line contains two space-separated integers denoting the respective values of `s` and `t`.
The second line contains two space-separated integers denoting the respective values of `a` and `b`.
The third line contains two space-separated integers denoting the respective values of `m` and `n`.
The fourth line contains `m` space-separated integers denoting the respective distances that each apple falls 
from point `a`.
The fifth line contains `n` space-separated integers denoting the respective distances that each orange falls
from point `n`.

**Constraints**
* `1 <= s,t,a,b,m,n <= pow(10, 5)`
* `-pow(10,5) <= d <= pow(10,5)`
* `a < s < t < b`

**Output Format**

Print two integers on two different lines:

1. The first integer: the number of apples that fall on Sam's house.
2. The second integer: the number of oranges that fall on Sam's house.


**Sample Input**

```
7 11
5 15
3 2
-2 2 1
5 -6
```

**Sample Output**

```
1
1
```

## Tags:

* Fundamentals
* Arrays
* Numbers

## Solution:

* **PHP (7.2)** language in `apple-and-orange.php`.
* **Python 3** language in `apple-and-orange.py`.