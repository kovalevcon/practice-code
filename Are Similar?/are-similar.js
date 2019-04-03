/**
 * Check whether two arrays are similar.
 *
 * @param {array} a
 * @param {array} b
 * @return {boolean}
 */
const areSimilar = (a, b) => {
  const diffA = a.filter((v, i) => v !== b[i]);
  return diffA.length === 0 ||
    (diffA.length === 2 && diffA.join() === b.filter((v, i) => v !== a[i]).reverse().join())
};


console.log(areSimilar([1, 2, 3], [2, 1, 3])); // true
console.log(areSimilar([1, 2], [2, 1, 3])); // false
console.log(areSimilar([1, 2, 3], [1, 2, 3])); // true