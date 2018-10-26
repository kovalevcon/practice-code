def matrixElementsSum(matrix):
    """
    :type matrix: list
    :rtype: int
    """
    summary = sum(matrix[0])
    for i in range(1, len(matrix)):
        for j in range(0, len(matrix[i])):
            if matrix[i - 1][j] == 0:
                matrix[i][j] = 0
        summary += sum(matrix[i])

    return summary


print(matrixElementsSum([
    [0, 1, 1, 2],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
]))  # 9

print(matrixElementsSum([
    [1, 1, 1, 0],
    [0, 5, 0, 1],
    [2, 1, 3, 10]
]))  # 9
