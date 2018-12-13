/**
 * Find integer representing the size of the highlighted area.
 *
 * @return {number}
 * @param {array} h
 * @param {string} word
 */
const designerPdfViewer = (h, word) => {

  let alphabet = [];
  for(let i = 97; i < 123; i++) {
    alphabet[String.fromCharCode(i)] = h.shift();
  }

  let heights = [];
  [...word].forEach(v => {
    heights.push(alphabet[v]);
  });

  return Math.max(...heights) * word.length;
};


console.log(
  designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5], 'abc')
); // 9

console.log(
  designerPdfViewer([1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 7], 'zaba')
); // 28