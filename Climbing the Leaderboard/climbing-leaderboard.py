# Climbing the Leaderboard function
def climbingLeaderboard(scores, alice):
    """
    :type scores: list
    :type alice: list
    :rtype: list
    """
    scores = sorted(list(set(scores)), reverse=True)
    length = len(scores) - 1

    result = []
    for score in alice:
        while length >= 0:
            if score >= scores[length]:
                length -= 1
            else:
                result.append(length + 2)
                break
        if length < 0:
            result.append(1)

    return result


print(climbingLeaderboard([100, 100, 50, 40, 40, 20, 10], [5, 25, 50, 120]))  # [6, 4, 2, 1]
print(climbingLeaderboard([100, 90, 90, 80, 75, 60], [50, 65, 77, 90, 102]))  # [6, 5, 4, 2, 1]