/**
 * Climbing the Leaderboard function
 *
 * @param {array} scores
 * @param {array} alice
 * @return {array}
 */
const climbingLeaderboard = function (scores, alice) {

  scores = [...new Set(scores)].sort((a, b) => b - a);

  let length = scores.length - 1;
  let result = [];

  alice.forEach((score) => {
    while (length >= 0) {
      if (score >= scores[length]) {
        --length;
      } else {
        result.push(length + 2);
        break;
      }
    }

    if (length < 0) {
      result.push(1);
    }
  });

  return result;
};

console.log(climbingLeaderboard([100, 100, 50, 40, 40, 20, 10], [5, 25, 50, 120])); // [6, 4, 2, 1]
console.log(climbingLeaderboard([100, 90, 90, 80, 75, 60], [50, 65, 77, 90, 102])); // [6, 5, 4, 2, 1]
