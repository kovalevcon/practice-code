/**
 * Cat and mouse function
 *
 * @return {string}
 * @param {number} x
 * @param {number} y
 * @param {number} z
 */
function catAndMouse(x, y, z) {
  if (Math.abs(x - z) < Math.abs(y - z)) {
    return 'Cat A';
  } else if (Math.abs(y - z) < Math.abs(x - z)) {
    return 'Cat B';
  } else {
    return 'Mouse C';
  }
}

console.log(catAndMouse(1, 2, 3)); // 'Cat B'
console.log(catAndMouse(1, 3, 2)); // 'Mouse C'