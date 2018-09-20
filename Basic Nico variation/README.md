# Basic Nico variation

Source: [Link](https://www.codewars.com/kata/basic-nico-variation/python)

## Task:

Write a function `nico/nico()` that accepts two parameters:

* `key`/`$key` - string consists of unique letters and digits
* `message`/`$message` - string to encode

and encodes the` message` using the `key`.

First create a numeric key basing on a provided `key` by assigning each letter position in which it is located 
after setting the letters from `key` in an alphabetical order.

For example, for the key `crazy` we will get `23154` because of `acryz` (sorted letters from the key).
Let's encode `secretinformation` using our `crazy` key.

```
2 3 1 5 4
---------
s e c r e
t i n f o
r m a t i
o n
```

After using the key:

```
1 2 3 4 5
---------
c s e e r
n t i o f
a r m i t
  o n    
```

**Notes**

The `message` is never shorter than the key.

**Sample Input**

```
nico("crazy", "secretinformation")
```

**Sample Output**

```
"cseerntiofarmit on  "
```

## Tags:

* Fundamentals
* Algorithms
* Cryptography
* Security
* String

## Solution:

* **PHP (7.2)** language in `basic-nico-variation.php`.
* **Python 3** language in `basic-nico-variation.py`.