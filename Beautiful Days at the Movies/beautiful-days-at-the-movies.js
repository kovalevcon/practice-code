/**
 * Complete the beautifulDays function in the editor below. It must return the number of beautiful days in the range.
 *
 * @return {number}
 * @param {number} i
 * @param {number} j
 * @param {number} k
 */
const beautifulDays = (i, j, k) => {
  let count = 0;

  const check = (v) => {
    return Math.abs(v - parseInt(v.toString().split("").reverse().join(""))) % k === 0;
  };

  while (i <= j) {
    count += check(i);
    i++;
  }

  return count;
};

console.log(beautifulDays(20, 23, 6)); // 2
console.log(beautifulDays(13, 45, 3)); // 33