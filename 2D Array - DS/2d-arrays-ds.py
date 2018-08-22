

# Complete the hourglassSum function below.
def hourglassSum(arr):
    length = len(arr) - 2
    hourglass_sums = []
    for i in range(length):
        for j in range(length):
            hourglass_sums.append(
                arr[i][j] + arr[i][j + 1] + arr[i][j + 2] +  # first line
                arr[i + 1][j + 1] +  # second line
                arr[i + 2][j] + arr[i + 2][j + 1] + arr[i + 2][j + 2]  # third line
            )

    return max(hourglass_sums)


print(hourglassSum([
    [-9, -9, -9, 1, 1, 1],
    [0,  -9,  0, 4, 3, 2],
    [-9, -9, -9, 1, 2, 3],
    [0,   0,  8, 6, 6, 0],
    [0,   0,  0, -2, 0, 0],
    [0,   0,  1, 2, 4, 0]
]))
