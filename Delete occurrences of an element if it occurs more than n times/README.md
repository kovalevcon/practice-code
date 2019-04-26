# Delete occurrences of an element if it occurs more than n times

Source: [Link](https://www.codewars.com/kata/delete-occurrences-of-an-element-if-it-occurs-more-than-n-times/train)

## Task:

Alice and Bob were on a holiday. Both of them took many pictures of the places they've been, and now they want to show
Charlie their entire collection. However, Charlie doesn't like this sessions, since the motive usually repeats. 
He isn't fond of seeing the Eiffel tower 40 times. He tells them that he will only sit during the session if they show
the same motive at most N times. Luckily, Alice and Bob are able to encode the motive as a number. Can you help them to
remove numbers such that their list contains each number only up to N times, without changing the order?

Given a list lst and a number N, create a new list that contains each number of lst at most N times without reordering.
For example if `N = 2`, and the input is `[1,2,3,1,2,1,2,3]`, you take `[1,2,3,1,2]`, drop the next `[1,2]` since this
would lead to 1 and 2 being in the result 3 times, and then take 3, which leads to `[1,2,3,1,2,3]`.

**Sample Input**

```
[1,1,1,1], 2
```

**Sample Output**
```
[1,1]
```

## Tags:

* Fundamentals
* Algorithms
* Lists
* Data structures

## Solution:

* **PHP 7** language in `delete-elem-if-occurs-more-n-times.php`.
* **Python 3** language in `delete-elem-if-occurs-more-n-times.py`.
* **JavaScript ES6** language in `delete-elem-if-occurs-more-n-times.js`.
* **Go** language in `delete-elem-if-occurs-more-n-times.go`.