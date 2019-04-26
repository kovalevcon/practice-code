/**
 * Delete occurrences of an element if it occurs more than n times
 *
 * @param {array} arr
 * @param {int} n
 * @return {array}
 */
const deleteNth = (arr, n) => {
  let repeats = {};
  let cleared_arr = [];
  for (let i = 0; i < arr.length; i++) {
    if ((repeats[arr[i]] || 0) < n) {
      cleared_arr.push(arr[i]);
    }
    repeats[arr[i]] = (repeats[arr[i]] || 0) + 1;
  }

  return cleared_arr;
};

console.log(deleteNth([20, 37, 20, 21], 1)); // [20, 37, 21]
console.log(deleteNth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3)); // [1, 1, 3, 3, 7, 2, 2, 2]
console.log(deleteNth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3)); // [1, 2, 3, 1, 1, 2, 2, 3, 3, 4, 5]