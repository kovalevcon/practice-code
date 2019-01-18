Math.gcd = (a, b) => {
  if ( ! b) {
    return a;
  }

  return Math.gcd(b, a % b);
};

/**
 * Calculate lcms
 *
 * @param {array} n
 * @return {number}
 */
const lcms = n => {
  return n.reduce((x, y) => parseInt(((x * y) / Math.gcd(x, y))), 1);
};

/**
 * Complete the sumFracts function below.
 *
 * @param {array} l
 * @return {array}|{number}|{null}
 */
const sumFracts = l => {
  if (!l.length) {
    return null;
  }

  let numerator = 0;
  const denominator = lcms(l.map(n => n[1]));

  let k;
  for (let i = 0; i < l.length; i++) {
    k = parseInt(denominator / l[i][1]);
    numerator += k * l[i][0];
  }

  const final_gcd = Math.gcd(numerator, denominator);

  return (numerator % denominator !== 0) ?
    [parseInt(numerator / final_gcd), parseInt(denominator / final_gcd)] : parseInt(numerator / denominator);
};

console.log(sumFracts([[62, 63], [62, 64]])); // [3937, 2016]
console.log(sumFracts([[1, 3], [5, 3]])); // 2
console.log(sumFracts([[1, 2], [1, 3], [1, 4]])); // [13, 12]