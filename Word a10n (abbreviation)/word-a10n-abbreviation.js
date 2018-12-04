/**
 * Word a10n (abbreviation) function
 *
 * @param {string} string
 * @return {string}
 */
const abbreviate = (string) => {
  return string.replace(/[a-z]{4,}/gi, (str) => {
    return str.substr(0, 1) + (str.length - 2) + str.substr(-1, 1);
  });
};

console.log(abbreviate('elephant-rides are really fun!')); // e6t-r3s are r4y fun!
console.log(abbreviate('internationalization')); // i18n