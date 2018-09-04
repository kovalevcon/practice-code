# Ease the StockBroker

Source: [Link](https://www.codewars.com/kata/54de3257f565801d96001200/train/php)

## Task:

Clients place orders to a stockbroker as strings. The order can be simple or multiple.

Type of a simple order: Quote /space/ Quantity /space/ Price /space/ Status

where Quote is formed of non-whitespace character, Quantity is an int, Price a double (with mandatory decimal 
point "." ), Status is represented by the letter B (buy) or the letter S (sell).

Example:

`"GOOG 300 542.0 B"`

A multiple order is the concatenation of simple orders with a comma between each.

Example:

`"ZNGA 1300 2.66 B, CLH15.NYM 50 56.32 B, OWW 1000 11.623 B, OGG 20 580.1 B"`

or (C)

`"ZNGA 1300 2.66 B,CLH15.NYM 50 56.32 B,OWW 1000 11.623 B,OGG 20 580.1 B"`

To ease the stockbroker your task is to produce a string of type

`"Buy: b Sell: s"` where b and s are 'double' formatted with no decimal (rounded to integers), b representing the 
total price of bought stocks and s the total price of sold stocks.

Example:

`"Buy: 294990 Sell: 0"`

Unfortunately sometimes clients make mistakes. When you find mistakes in orders, you must pinpoint these badly formed
orders and produce a string of type:

`"Buy: b Sell: s; Badly formed nb: badly-formed 1st simple order ;badly-formed nth simple order ;"`

where nb is the number of badly formed simple orders, b representing the total price of bought stocks with correct simple order and s the total price of sold stocks with correct simple order.

Examples:

`"Buy: 263 Sell: 11802; Badly formed 2: CLH16.NYM 50 56 S ;OWW 1000 11 S ;"`

`"Buy: 100 Sell: 56041; Badly formed 1: ZNGA 1300 2.66 ;"`

Note: Due to Codewars whitespace differences will not always show up in test results.

**Sample Input**
```
GOOG 300 542.0 B, AAPL 50 145.0 B, CSCO 250.0 29 B, GOOG 200 580.0 S
```

**Sample Output**
```
Buy: 169850 Sell: 116000; Badly formed 1: CSCO 250.0 29 B ;
```

## Tags:

* Fundamentals
* Algorithms
* Strings

## Solution:

* **PHP (7.2)** language in `ease-stockbroker.php`.
* **Python 3** language in `ease-stockbroker.py`.