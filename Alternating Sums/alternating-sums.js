/**
 * Alternating Sums function
 *
 * @param {number[]} a
 * @return {number[]}
 */
const alternatingSums = a => {
  const summer = (a, b) => a + b;

  return [
    a.filter((_, i) => { return i % 2 === 0}).reduce(summer, 0),
    a.filter((_, i) => { return i % 2 !== 0}).reduce(summer, 0)
  ];
};

console.log(alternatingSums([50, 60, 60, 45, 70])); // [180, 105]
console.log(alternatingSums([100, 51, 50, 100])); // [150, 151]