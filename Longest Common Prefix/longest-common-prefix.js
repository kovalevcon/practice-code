/**
 * Find the longest common prefix string amongst an array of strings function
 *
 * @param {string[]} strs
 * @return {string}
 */
const longestCommonPrefix = function(strs) {
  if (!strs.length) {
    return '';
  }

  let prefix = '', tempPrefix = '';
  let start = 0, end = 0;

  const first = strs[0];

  try {
    for (let i = 0, length = first.length; i < length; i++) {
      ++end;
      tempPrefix = first.substr(start, end);

      strs.forEach((str) => {
        if (tempPrefix !== str.substr(start, end)) {
          throw Error;
        }
      });

      prefix = tempPrefix;
    }
  } catch (e) {}

  return prefix;
};

console.log(longestCommonPrefix(["dog","racecar","car"])); // ''
console.log(longestCommonPrefix(["flower","flow","flight"])); // 'fl'
console.log(longestCommonPrefix([])); // ''