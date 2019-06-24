"use strict";

/**
 * Count repeats 'a' char in string
 *
 * @param {string} str
 * @return {int}
 */
let counter = str => {
  return str.split('').reduce((total, letter) => {
    return letter === 'a' ? total + 1 : total;
  }, 0);
};

/**
 * Print the number of letter a's in the first letters of infinite string
 *
 * @param {string} s
 * @param {int} n
 * @return {int}
 */
const repeatedString = (s, n) => {
  if (s === 'a') {
    return n;
  } else if (s.search('a') === -1) {
    return 0;
  }

  return (counter(s) * Math.floor(n / s.length)) + counter(s.substr(0, n % s.length));
};

console.log(repeatedString('abcac', 10)); // 4
console.log(repeatedString('aba', 10)); // 7
console.log(repeatedString('a', 1000000000000)); // 1000000000000