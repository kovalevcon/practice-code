/**
 * Find out which one of the given numbers differs from the others
 *
 * @param {string} numbers
 * @return {int}
 */
const iqTest = (numbers) => {
  const arrInt = numbers.split(' ').map((value => {
    return value % 2;
  }));
  const diffValue = arrInt.reduce((acc, a) => {return acc + a;}, 0) === 1 ? 1 : 0;
  return parseInt(arrInt.indexOf(diffValue)) + 1;
};

console.debug(iqTest("2 4 7 8 10")); // 3
console.debug(iqTest("1 2 2")); // 1
console.debug(iqTest("5 3 2")); // 3