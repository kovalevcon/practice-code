/**
 * Return it with its digits in descending order
 *
 * @param {int} n
 * @return {int}
 */
const descendingOrder = n => {
  return parseInt(n.toString().split('').sort((a, b) => b - a).join(''));
};

console.log(descendingOrder(1021)); // 2110
console.log(descendingOrder(123456789)); // 987654321