def formingMagicSquare(s):
    """
    :type s: list
    :rtype: int
    """
    # Square to line format
    s = s[0] + s[1] + s[2]

    # Magic squares in line format
    squares = [
        [8, 1, 6, 3, 5, 7, 4, 9, 2],
        [6, 1, 8, 7, 5, 3, 2, 9, 4],
        [4, 9, 2, 3, 5, 7, 8, 1, 6],
        [2, 9, 4, 7, 5, 3, 6, 1, 8],
        [8, 3, 4, 1, 5, 9, 6, 7, 2],
        [4, 3, 8, 9, 5, 1, 2, 7, 6],
        [6, 7, 2, 1, 5, 9, 8, 3, 4],
        [2, 7, 6, 9, 5, 1, 4, 3, 8],
    ]

    costs = []

    for square in squares:
        cost = 0
        for i, j in zip(square, s):
            if i != j:
                cost += abs(i - j)
        costs.append(cost)

    return min(costs)


print(formingMagicSquare([
           [5, 3, 4],
           [1, 5, 8],
           [6, 4, 2]
       ]))  #