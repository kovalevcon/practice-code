# Counting Duplicates

Source: [Link](https://www.codewars.com/kata/counting-duplicates/python)

## Task:

Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits 
that occur more than once in the input string. The input string can be assumed to contain only alphabets 
(both uppercase and lowercase) and numeric digits.

**Example**

```
"abcde" -> 0 # no characters repeats more than once
"aabbcde" -> 2 # 'a' and 'b'
"aabBcde" -> 2 # 'a' occurs twice and 'b' twice (`b` and `B`)
"indivisibility" -> 1 # 'i' occurs six times
"Indivisibilities" -> 2 # 'i' occurs seven times and 's' occurs twice
"aA11" -> 2 # 'a' and '1'
"ABBA" -> 2 # 'A' and 'B' each occur twice
```

**Sample Input**

```
ABBA
```

**Sample Output**
```
2
```

## Tags:

* Fundamentals
* Algorithms
* Strings

## Solution:

* **PHP 7** language in `counting-duplicates.php`.
* **Python 3** language in `counting-duplicates.py`.
* **JavaScript ES6** language in `counting-duplicates.js`.