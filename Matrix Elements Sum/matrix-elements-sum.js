/**
 * Matrix elements summary function
 *
 * @return {number}
 * @param {array} matrix
 */
function matrixElementsSum(matrix) {
  const summer = (a, b) => a + b;

  let summary = matrix[0].reduce(summer);

  for (let i = 1; i < matrix.length; i++) {
    for (let j = 0; j < matrix[i].length; j++) {
      if (matrix[i - 1][j] === 0) {
        matrix[i][j] = 0;
      }
    }
    summary += matrix[i].reduce(summer);
  }

  return summary
}

console.log(matrixElementsSum([
  [0, 1, 1, 2],
  [0, 5, 0, 0],
  [2, 0, 3, 3]])
); // 9

console.log(matrixElementsSum([
  [1, 1, 1, 0],
  [0, 5, 0, 1],
  [2, 1, 3, 10]])
); // 9