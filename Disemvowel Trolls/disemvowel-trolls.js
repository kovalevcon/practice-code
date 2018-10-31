/**
 * Removed vowels function
 *
 * @return {string}
 * @param {string} str
 */
function disemvowel(str) {
  return str.replace(/[aeiuo]/gi, '');
}

console.log(disemvowel('This website is for losers LOL!')); // 'Ths wbst s fr lsrs LL!'
console.log(disemvowel('The test is OK!')); // 'Th tst s K!'
