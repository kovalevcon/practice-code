/**
 * Function to add border in a rectangular matrix
 *
 * @param {string[]} picture
 * @return {string[]}
 */
const addBorder = picture => {
  return ['*'.repeat(picture[0].length + 2)].concat(
    picture.map(value => {
      return `*${value}*`;
    })
  ).concat(['*'.repeat(picture[0].length + 2)]);
};

console.log(addBorder(["abc", "ded"])); // ["*****", "*abc*", "*ded*", "*****"]
console.log(addBorder(["a"])); // ["***", "*a*", "***"]
console.log(addBorder(["aa", "**", "zz"])); // ["****", "*aa*", "****", "*zz*", "****"]