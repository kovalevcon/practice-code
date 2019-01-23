/**
 * Function that reverses characters in (possibly nested) parentheses in the input string
 *
 * @param {string} inputString
 * @return {string}
 */
const reverseInParentheses = inputString => {
  if (!inputString || inputString === '()') {
    return '';
  } else if (inputString.indexOf('(') !== -1 && inputString.indexOf(')') !== -1) {
    return reverseInParentheses(inputString.replace(/\(([^()]*)\)/, (match, p1) => {
      return p1.split("").reverse().join('');
    }));
  }

  return inputString;
};

console.log(reverseInParentheses('(bar)')); // bar
console.log(reverseInParentheses('foo(bar)baz(blim)')); // foorabbazmilb
console.log(reverseInParentheses('foo(bar(baz))blim')); // foobazrabblim