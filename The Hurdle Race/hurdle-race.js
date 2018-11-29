/**
 * Find count of the potion to be able to jump all of the hurdles
 *
 * @param {int} k
 * @param {array} height
 * @return {int}
 */
const hurdleRace = (k, height) =>
{
  const max = Math.max(...height);

  return max > k ? Math.abs(max - k) : 0;
};

console.log(hurdleRace(4, [1, 6, 3, 5, 2])); // 2
console.log(hurdleRace(7, [2, 5, 4, 5, 2])); // 0