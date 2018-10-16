# Insert a node at the head of a linked list

Source: [Link](https://www.hackerrank.com/challenges/insert-a-node-at-the-head-of-a-linked-list/problem)

## Task:

You’re given the pointer to the head node of a linked list and an integer to add to the list. Create a new node with
the given integer, insert this node at the head of the linked list and return the new head node. The head pointer given
 may be null meaning that the initial list is empty.

**Input Format**

You have to complete the `SinglyLinkedListNode Insert(SinglyLinkedListNode head, int data)` method which takes two 
arguments - the head of the linked list and the integer to insert. You should NOT read any input from stdin/console.

The input is handled by code in the editor and is as follows:

The first line contains an integer `n`, denoting the number of elements to be inserted at the head of the list.
The next `n` lines contain an integer each, denoting the element to be inserted. 

**Constraints**

* `1 <= n <= 1000`
* `1 <= list[i] <= 1000`

**Output Format**

Insert the new node at the head and return the head of the updated linked list. Do NOT print anything to stdout/console.

The output is handled by the code in the editor and it is as follows:

Print the elements of linked list from head to tail, each in a new line.

**Sample Input**

```
5
383
484
392
975
321
```

**Sample Output**
```
321
975
392
484
383
```

## Tags:

* Fundamentals
* Algorithms
* Data structures

## Solution:

* **PHP 7** language in `insert-to-head-linked-list.php`.
* **Python 3** language in `insert-to-head-linked-list.py`.
* **JavaScript ES6** language in `insert-to-head-linked-list.py`.