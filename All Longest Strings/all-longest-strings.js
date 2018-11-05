/**
 * Find longest strings in array function
 *
 * @param {array} inputArray
 * @return {array}
 */
function allLongestStrings(inputArray) {
  const max_length = Math.max(...inputArray.map((str) => str.length));
  return inputArray.filter((val) => val.length === max_length);
}

console.log(allLongestStrings(["aba", "aa", "ad", "vcd", "aba"])); // [ 'aba', 'vcd', 'aba' ]


