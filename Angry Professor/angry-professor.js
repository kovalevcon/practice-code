/**
 * Complete the angryProfessor function below.
 *
 * @param {number} k
 * @param {array} a
 * @return {string}
 */
const angryProfessor = (k, a) => {
  let arrive = 0;
  for(let i = 0; i < a.length; i++) {
    if (a[i] <= 0) {
      arrive++;
    }
  }

  return arrive >= k ? 'NO' : 'YES';
};

console.log(angryProfessor(3, [-1, -3, 4, 2])); // YES
console.log(angryProfessor(2, [0, -1, 2, 1])); // NO
console.log(angryProfessor(4, [-93, -86, 49, -62, -90, -63, 40, 72, 11, 67])); // NO