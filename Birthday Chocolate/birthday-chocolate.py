# Complete the solve function below.
def solve(s, d, m):
    result = 0
    for i in range(len(s)):
        arr = s[i:i + m]
        if len(arr) == m and sum(arr) == d:
            result += 1

    return result


print(solve([1, 2, 1, 3, 2], 3, 2))