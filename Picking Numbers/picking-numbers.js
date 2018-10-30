/**
 * Find max length of subarrays function
 *
 * @return {number}
 * @param {array} a
 */
function pickingNumbers(a) {
  let counts = [];

  new Set(a).forEach(function (x) {
    counts.push(a.filter(i => i === x || i === x + 1).length);
  });

  return Math.max(...counts);
}

console.log(pickingNumbers([4, 6, 5, 3, 3, 1])); // 3
console.log(pickingNumbers([1, 2, 2, 3, 1, 2])); // 5