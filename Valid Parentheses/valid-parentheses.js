/**
 * Check is valid parentheses
 *
 * @param {string} s
 * @return {boolean}
 */
const isValid = function(s) {

  const brackets = {
    '{': '}', '[': ']', '(': ')'
  };
  let stack = [];

  for (let i = 0; i < s.length; i++) {
    let cur = s[i];
    if (brackets[cur] !== undefined) {
      stack.push(brackets[cur]);
    } else if (stack.pop() !== cur) {
      return false;
    }
  }

  return !stack.length;
};

console.log(isValid('()[]{}')); // true
console.log(isValid('([)]')); // false