/**
 * Build penthouse function
 *
 * @param {number} n
 * @return {string}
 */
const myCrib = function (n) {
  const count = n * 2 + 1;
  const repeat = n * 2;
  const maxWidth = count + (repeat * 2);
  const shortLength = (maxWidth - count) / 2 - 1;

  const spaces = ' '.repeat(repeat);
  const shortSpaces = ' '.repeat(shortLength);
  const shortUnderscores = '_'.repeat(shortLength);

  let crib = `${spaces}${'_'.repeat(count)}${spaces}\n`;

  for(let i = 0; i < repeat; i++) {
    crib += `${' '.repeat(repeat - i - 1)}/${'_'.repeat(count + (i * 2))}\\${' '.repeat(repeat - i - 1)}\n`;
  }

  crib += `|${' '.repeat(maxWidth - 2)}|\n`.repeat(n - 1);
  crib += `|${spaces}${shortUnderscores}${spaces}|\n`;
  crib += `|${shortSpaces}|${shortSpaces}|${shortSpaces}|\n`.repeat(n - 1);
  crib += `|${shortUnderscores}|${shortUnderscores}|${shortUnderscores}|`;

  return crib;
};

console.log(myCrib(1));
//   ___
//  /___\
// /_____\
// |  _  |
// |_|_|_|

console.log(myCrib(2));
//     _____
//    /_____\
//   /_______\
//  /_________\
// /___________\
// |           |
// |    ___    |
// |   |   |   |
// |___|___|___|

