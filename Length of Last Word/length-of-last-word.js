/**
 * Function find length of last word
 *
 * @param {string} s
 * @return {number}
 */
const lengthOfLastWord = s => {
  return s.search(/[a-z]/i) === -1 ? 0 : s.match(/[a-z]+/ig).pop().length;
};

console.log(lengthOfLastWord('Hello World')); // 5
console.log(lengthOfLastWord(' Hello World')); // 5
console.log(lengthOfLastWord(' ')); // 0
console.log(lengthOfLastWord('')); // 0