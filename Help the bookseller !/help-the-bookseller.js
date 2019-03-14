/**
 * Complete stockList function to help the bookseller
 *
 * @param {array} listOfArt
 * @param {array} listOfCat
 * @return {string}
 */
const stockList = (listOfArt, listOfCat) => {

  if (!listOfArt.length || !listOfCat.length) {
    return '';
  }

  let listNewArt = new Map();

  listOfArt.forEach(val => {
    let arr = val.split(' ');
    let key = arr[0].charAt(0);

    listNewArt.set(key, (listNewArt.has(key) ? listNewArt.get(key) : 0) + parseInt(arr[1]));
  });

  return listOfCat.map(val => {
    return `(${val} : ${listNewArt.has(val) ? listNewArt.get(val) : 0})`;
  }).join(' - ');
};

// '(A : 200) - (B : 1140)'
console.log(stockList(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]));
// '(A : 0) - (B : 114) - (C : 70) - (W : 0)'
console.log(stockList(["CBART 20", "CDXEF 50", "BKWRK 25", "BTSQZ 89", "DRTYM 60"], ["A", "B", "C", "W"]));