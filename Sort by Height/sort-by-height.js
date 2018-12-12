/**
 * Sort by height
 *
 * @param {array} a
 * @return {array}
 */
const sortByHeight = (a) => {
  let withoutTree = [];

  for(let i = 0; i < a.length; i++) {
    if (a[i] !== - 1) {
      withoutTree[i] = a[i];
    }
  }

  const keys = Object.keys(withoutTree).sort((a, b) => parseInt(a) - parseInt(b));
  let values = Object.values(withoutTree).sort((a, b) => a - b);

  keys.forEach(v => {
    a[v] = values.shift();
  });

  return a;
};

console.log(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180])); // [-1, 150, 160, 170, -1, -1, 180, 190]
console.log(sortByHeight([4, 2, 9, 11, 2, 16])); // [2, 2, 4, 9, 11, 16]