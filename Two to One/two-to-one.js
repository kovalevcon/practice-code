/**
 * Find a new sorted string, the longest possible, containing distinct letters
 *
 * @return {string}
 * @param a {string}
 * @param b {string}
 */
const longest = (a, b) => {
  return [...new Set(a + b)].sort().join('');
};

console.log(longest('aretheyhere', 'yestheyarehere')); // 'aehrsty'
console.log(longest('loopingisfunbutdangerous', 'lessdangerousthancoding')); // 'abcdefghilnoprstu'