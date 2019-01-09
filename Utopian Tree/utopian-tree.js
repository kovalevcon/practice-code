/**
 * Complete the utopianTree function below.
 *
 * @param {number} n
 * @return {number}
 */
const utopianTree = n => {
  let height = 1;
  for (let i = 1; i <= n; i++) {
    if (i % 2) {
      height *= 2;
    } else {
      height++;
    }
  }

  return height;
};

console.log(utopianTree(0)); // 1
console.log(utopianTree(1)); // 2
console.log(utopianTree(4)); // 7