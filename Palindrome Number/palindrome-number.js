/**
 * @param {number} x
 * @return {boolean}
 */
const isPalindrome = function(x) {
  if (x < 0) {
    return false;
  } else if (x >= 0 && x < 10) {
    return true;
  }

  let num = x;
  let reverse = "";

  while (num > 0) {
    reverse += num % 10;
    num = Math.floor(num / 10);
  }

  return x == reverse;
};

console.log(isPalindrome(123)); // false
console.log(isPalindrome(121)); // true