# File Path Operations

Source: [Link](https://www.codewars.com/kata/5844e0890d3bedc5c5000e54/train/php)

## Task:

This kata requires you to write an object that receives a file path and does operations on it. 

**NOTE FOR PYTHON USERS**: You cannot use modules os.path, glob, and re.

The purpose of this kata is to use string parsing, so you're not supposed to import external libraries. 
I could only enforce this in python.

**Sample Input**
```
master = FileMaster('/Users/person1/Pictures/house.png')
```

**Sample Output**
```
>>> master.extension() # 'png'
>>> master.filename() # 'house'
>>> master.dirpath() # '/Users/person1/Pictures/'
```

## Tags:

* Fundamentals
* Algorithms
* String
* Arrays

## Solution:

* **PHP (7.2)** language in `file-path-operations.php`.
* **Python 3** language in `file-path-operations.py`.