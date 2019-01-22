/**
 * Implement strStr function
 *
 * @param {string} haystack
 * @param {string} needle
 * @return {number}
 */
const strStr = (haystack, needle) => {
  if (!needle) {
    return 0;
  }

  if (!haystack || haystack.length < needle.length) {
    return -1;
  }

  for(let i = 0; i <= haystack.length; i++) {
    if (haystack.substr(i, needle.length) === needle) {
      return i;
    }
  }

  return -1;
};

console.log(strStr('hello', 'll')); // 2
console.log(strStr('aaaaa', 'bba')); // -1
console.log(strStr('hello', '')); // 0