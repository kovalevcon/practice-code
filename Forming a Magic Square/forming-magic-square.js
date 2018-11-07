/**
 * Find a minimal cost to covert array to a magic square function
 *
 * @param {array} s
 * @return {int}
 */
function formingMagicSquare(s) {

  // Magic squares in line format
  const squares = [
    [8, 1, 6, 3, 5, 7, 4, 9, 2],
    [6, 1, 8, 7, 5, 3, 2, 9, 4],
    [4, 9, 2, 3, 5, 7, 8, 1, 6],
    [2, 9, 4, 7, 5, 3, 6, 1, 8],
    [8, 3, 4, 1, 5, 9, 6, 7, 2],
    [4, 3, 8, 9, 5, 1, 2, 7, 6],
    [6, 7, 2, 1, 5, 9, 8, 3, 4],
    [2, 7, 6, 9, 5, 1, 4, 3, 8],
  ];

  let costs = [];

  // Square to line format
  s = [...s[0], ...s[1], ...s[2]];

  squares.forEach((square) => {
    let cost = 0;

    for (let i = 0; i < square.length; i++) {
      if (s[i] !== square[i]) {
        cost += Math.abs(s[i] - square[i])
      }
    }

    costs.push(cost);
  });

  return Math.min(...costs);
}

console.log(formingMagicSquare([
  [5, 3, 4],
  [1, 5, 8],
  [6, 4, 2]
])); // 7