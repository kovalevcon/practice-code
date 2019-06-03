/**
 * Determine the minimum number of jumps it to jump from her starting position to the last cloud
 *
 * @param {array} c
 * @return {int}
 */
const jumpingOnClouds = (c) => {
  let jumps = 0;
  c = c.slice(1);
  while (c.length > 1) {
    let part = c[1] === 0 ? 2 : 1;
    c = c.slice(part);
    jumps++;
  }

  return jumps + c.length;
};

console.debug(jumpingOnClouds([0, 0, 0, 1, 0, 0])); // 3
console.debug(jumpingOnClouds([0, 0, 1, 0, 0, 1, 0])); // 4