/**
 * Function get century from year
 *
 * @param {number} year
 * @return {number}
 */
const centuryFromYear = function(year) {

  return year % 100 ? Math.floor(year / 100) + 1 : Math.floor(year / 100);
};

console.log(centuryFromYear(1900)); // 19
console.log(centuryFromYear(1724)); // 18