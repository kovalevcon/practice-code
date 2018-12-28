/**
 * Reverse the strings contained in each pair of matching parentheses
 *
 * @param {string} s
 * @return {string}
 */
const reverseParentheses = s => {
  let start = 0, end = 0;

  for (let i = 0; i < s.length; i++) {
    if (s[i] === '(') {
      start = i;
    } else if (s[i] === ')') {
      end = i;
      return reverseParentheses(
        `${s.substr(0, start)}${s.substr(start + 1, end - start - 1).split("").reverse().join("")}${s.substr(end + 1)}`
      );
    }
  }

  return s;
};

console.log(reverseParentheses('Code(Cha(lle)nge)')); // 'CodeegnlleahC'
console.log(reverseParentheses('The ((quick (brown) (fox) jumps over the lazy) dog)')); // 'The god quick nworb xof jumps over the lazy'