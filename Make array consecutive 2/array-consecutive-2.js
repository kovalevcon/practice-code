/**
 * Make array consecutive 2
 *
 * @return {number}
 * @param {array} statues
 */
function makeArrayConsecutive2(statues) {
  return Math.max(...statues) - Math.min(...statues) - statues.length + 1
}

console.log(makeArrayConsecutive2([6, 2, 3, 8])); // 3
console.log(makeArrayConsecutive2([0, 3])); // 2
console.log(makeArrayConsecutive2([5, 4, 6])); // 0