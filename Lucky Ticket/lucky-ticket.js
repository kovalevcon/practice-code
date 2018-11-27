/**
 * Check is lucky ticket number
 *
 * @param {int} n
 * @return {boolean}
 */
const isLucky = n => {
  const arr = (""+n).split('').map(v => {
    return parseInt(v);
  });
  const middle = parseInt(arr.length / 2);

  return arr.slice(0, middle).reduce((a, b) => a + b, 0) === arr.slice(middle).reduce((a, b) => a + b, 0);
};

console.log(isLucky(1230)); // true
console.log(isLucky(239017)); // false