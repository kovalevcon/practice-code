# Time Conversion

Source: [Link](https://www.hackerrank.com/challenges/time-conversion/problem)

## Task:

Given a time in `12-hour AM/PM format`, convert it to military (24-hour) time.

Note: Midnight is 12:00:00AM on a 12-hour clock, and 00:00:00 on a 24-hour clock.
Noon is 12:00:00PM on a 12-hour clock, and 12:00:00 on a 24-hour clock.

**Input Format**

A single string containing a time in `12`-hour clock format (i.e.: `hh:mm:ssAm` or `hh:mm:ssPM` ), 
where `01 <= hh <= 12` and `00 <= mm`, `ss <= 59`.

**Output Format**

Convert and print the given time in `24`-hour format, where `00 <= hh <= 23`.

**Sample Input**
```
07:05:45PM
```

**Sample Output**
```
19:05:45
```

## Tags:

* Fundamentals
* Datetime

## Solution:

* **PHP (7.2)** language in `time-conversion.php`.
* **Python 3** language in `time-conversion.py`.