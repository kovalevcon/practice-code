# Salesman's Travel

Source: [Link](https://www.codewars.com/kata/salesmans-travel/php)

## Task:

A traveling salesman has to visit clients. He got each client's address e.g. `432 Main Long Road St. Louisville OH 43071`
as a list.

The basic zipcode format usually consists of two capital letters followed by a white space and five digits. The list of
clients to visit was given as a string of all addresses, each separated from the others by a comma, e.g. :

`123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville NY 56432`.

To ease his travel he wants to group the list by zipcode.

The function `travel` will take two parameters `r` (addresses' list of all clients' as a string) and `zipcode` and
returns a string in the following format:

`zipcode:street and town,street and town,.../house number,house number,...`

The street numbers must be in the same order as the streets where they belong.

If a given zipcode doesn't exist in the list of clients' addresses return `zipcode:/`

**Sample Input**

```
r = "123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville 
NY 56432"
zipcode = "OH 43071"
```

**Sample Output**

```
OH 43071:Main Street St. Louisville,Main Long Road St. Louisville/123,432
```

## Tags:

* Fundamentals
* Strings

## Solution:

* **PHP (7.2)** language in `salesmans-travel.php`.
* **Python 3** language in `salesmans-travel.py`.