# Count the smiley faces!

Source: [Link](https://www.codewars.com/kata/count-the-smiley-faces/php)

## Task:

Given an array (arr) as an argument complete the function `countSmileys` that should return the total number
of smiling faces.

Rules for a smiling face:

* Each smiley face must contain a valid pair of eyes. Eyes can be marked as `:` or `;`

* A smiley face can have a nose but it does not have to. Valid characters for a nose are `-` or `~`

* Every smiling face must have a smiling mouth that should be marked with either `)` or `D`.

No additional characters are allowed except for those mentioned.

Valid smiley face examples:

`:) :D ;-D :~)`

Invalid smiley faces:

`;( :> :} :]`

Example cases:

```
countSmileys([':)', ';(', ';}', ':-D']);       // should return 2;
countSmileys([';D', ':-(', ':-)', ';~)']);     // should return 3;
countSmileys([';]', ':[', ';*', ':$', ';-D']); // should return 1;
```

## Tags:

* Fundamentals
* Regular Expressions
* Declarative Programming
* Advanced Language Features
* Strings

## Solution:

* **PHP (7.2)** language in `count-smiles.php`.
* **Python 3** language in `count-smiles.py`.