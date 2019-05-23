/**
 * Find the minimal number of moves required to obtain a strictly increasing sequence from the input
 *
 * @param {array} inputArray
 * @return {int}
 */
const arrayChange = (inputArray) => {
  let changes = 0;
  for (let i = 1; i <= inputArray.length; i++) {
    if (inputArray[i] <= inputArray[i - 1]) {
      changes += inputArray[i - 1] - inputArray[i] + 1;
      inputArray[i] = inputArray[i - 1] + 1;
    }
  }

  return changes;
};

console.log(arrayChange([1, 1, 1])); // 3
console.log(arrayChange([-1000, 0, -2, 0])); // 5
console.log(arrayChange([3122, -645, 2616, 13213, -8069])); // 25559