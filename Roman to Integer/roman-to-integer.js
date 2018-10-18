/**
 * Roman numbers to integer
 *
 * @param {string} s
 * @return {number}
 */
const romanToInt = function (s) {
  const symbols = {
    'Z': 0, 'I': 1, 'V': 5, 'X': 10, 'L': 50, 'C': 100, 'D': 500, 'M': 1000
  };

  let num = 0;
  let prev = 'Z';
  let curr;

  for (let i = s.length - 1; i > -1; i--) {
    curr = s[i];
    num += symbols[curr] >= symbols[prev] ? symbols[curr] : -symbols[curr];
    prev = curr;
  }

  return num;
};

console.log(romanToInt('III')); // 3
console.log(romanToInt('LVIII')); // 58
console.log(romanToInt('MCMXCIV')); // 1994