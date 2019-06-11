/**
 * Given a string, find out if its characters can be rearranged to form a palindrome.
 *
 * @param {string} inputString
 * @return {boolean}
 */
const palindromeRearranging = (inputString) => {
  let counts = {};
  for (let x of inputString.split('')) {
    counts[x] = counts[x] ? counts[x] + 1 : 1;
  }

  Object.keys(counts).map((key, index) => {
    counts[key] %= 2;
  });

  return Object.values(counts).reduce((a, b) => a + b, 0) <= 1;
};

console.debug(palindromeRearranging("abbcabb")); // true
console.debug(palindromeRearranging("zaa")); // true
console.debug(palindromeRearranging("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc")); // false