/**
 * Remove Duplicates from Sorted Array
 *
 * @param {number[]} nums
 * @return {number}
 */
const removeDuplicates = nums => {
  if (!nums.length) {
    return 0;
  }

  let i = 0;
  for(let j = 1, len = nums.length - 1; j <= len; j++) {
    if (nums[i] !== nums[j]) {
      i++;
      nums[i] = nums[j];
    }
  }

  return i + 1;
};

console.log(removeDuplicates([0, 0, 1, 1, 1, 2, 2, 3, 3, 4])); // 5
console.log(removeDuplicates([1, 1, 2])); // 2