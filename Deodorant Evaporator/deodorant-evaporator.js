/**
 * Complete tests the life of an evaporator containing a gas.
 *
 * @param {number} content
 * @param {number} evap_per_day
 * @param {number} threshold
 * @return {number}
 */
const evaporator = (content, evap_per_day, threshold) => {
  let percent = 100;
  let days = 0;
  while (percent > threshold) {
    percent = percent - (percent * evap_per_day / 100);
    days++;
  }

  return days;
};

console.log(evaporator(10, 10, 10)); // 22
console.log(evaporator(50, 12, 1)); // 37
console.log(evaporator(10, 1, 1)); // 459