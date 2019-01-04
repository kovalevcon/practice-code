/**
 * Remove element of all instances in array
 *
 * @param {number[]} nums
 * @param {number} val
 * @return {number}
 */
const removeElement = (nums, val) => {
  if (!nums.length) {
    return 0;
  }

  let i = 0, n = nums.length;
  while (i < n) {
    if (nums[i] === val) {
      nums[i] = nums[n - 1];
      n--;
    } else {
      i++;
    }
  }

  return i;
};


console.log(removeElement([3, 2, 2, 3], 3)); // 2
console.log(removeElement([0, 1, 2, 2, 3, 0, 4, 2], 2)); // 5