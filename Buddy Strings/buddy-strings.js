"use strict";

/**
 * Find pairs of not equal values
 *
 * @param {string} a
 * @param {string} b
 * @return {Array}
 */
const pair = (a, b) => {
  let res = [];
  for (let i = 0; i < a.length; i++) {
    if (a[i] !== b[i]) {
      res.push([a[i], b[i]]);
    }
  }

  return res;
};

/**
 * Return true if and only if we can swap two letters in A so that the result equals B.
 *
 * @param {string} a
 * @param {string} b
 * @return {boolean}
 */
const buddyStrings = (a, b) => {
  if (a.length !== b.length) {
    return false;
  }
  if (a === b) {
    return (new Set(a.split(''))).size < a.length;
  }

  let pairs = pair(a, b);
  return pairs.length === 2 && `${pairs[0][0]}${pairs[0][1]}` === `${pairs[1][1]}${pairs[1][0]}`;
};

console.debug(buddyStrings("ab", "ba")); // true
console.debug(buddyStrings("ab", "ab")); // false
console.debug(buddyStrings("aaaaaaabc", "aaaaaaacb")); // true