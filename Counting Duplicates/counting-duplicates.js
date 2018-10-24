/**
 * Duplicate count function
 *
 * @return {number}
 * @param {string} text
 */
function duplicateCount(text) {
  text = text.toLowerCase();

  let res = 0;
  new Set(text).forEach(function (value) {
    if (text.split(value).length - 1 > 1) {
      res++;
    }
  });

  return res;
}

console.log(duplicateCount('abcde')); // 0
console.log(duplicateCount('aabbcde')); // 2
console.log(duplicateCount('Indivisibilities')); // 2