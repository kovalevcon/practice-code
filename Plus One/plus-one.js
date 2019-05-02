/**
 * Plus one function
 *
 * @param {array} digits
 * @return {array}
 */
const plusOne = (digits) => {
  const len = digits.length - 1;
  for (let i = len; i >= 0; i--) {
    if (digits[i] < 9) {
      digits[i] += 1;
      return digits;
    }
    digits[i] = 0;
  }

  if (digits[0] === 0) {
    digits.unshift(1);
  }

  return digits;
};

console.log(plusOne([1, 2, 3])); // [1, 2, 4]
console.log(plusOne([4, 3, 2, 1])); // [4, 3, 2, 1]
console.log(plusOne([9, 9, 9])); // [1, 0, 0, 0]