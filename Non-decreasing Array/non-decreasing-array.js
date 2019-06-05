/**
 * Check if it could become non-decreasing by modifying array at most 1 element
 *
 * @param {number[]} nums
 * @return {boolean}
 */
const checkPossibility = (nums) => {
  let pos = null;
  for (let i = 0; i < nums.length; i++) {
    if (nums[i] > nums[i + 1]) {
      if (pos !== null) {
        return false;
      }
      pos = i;
    }
  }

  return (pos == null || pos === 0 || pos === nums.length - 2
    || nums[pos - 1] <= nums[pos + 1] || nums[pos] <= nums[pos + 2])
};

console.debug(checkPossibility([4, 2, 3])); // true
console.debug(checkPossibility([4, 2, 1])); // false