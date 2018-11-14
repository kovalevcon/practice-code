/**
 * Find the number of common characters between two strings function
 *
 * @param {string} s1
 * @param {string} s2
 * @return {number}
 */
const commonCharacterCount = function(s1, s2) {
  let cnt = 0;

  new Set(s1.split('')).forEach((chr) => {
    cnt += (Math.min(s1.split(chr).length - 1, s2.split(chr).length - 1));
  });

  return cnt;
};

console.log(commonCharacterCount("aabcc","adcaa")); // 3
console.log(commonCharacterCount("zzzz","zzzzzzz")); // 4