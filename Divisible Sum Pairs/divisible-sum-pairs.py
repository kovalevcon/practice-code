# Complete the divisibleSumPairs function below.
def divisibleSumPairs(n, k, ar):
    return sum(1 for i in range(n) for j in range(i + 1, n) if (ar[i] + ar[j]) % k == 0)


print(divisibleSumPairs(6, 3, [1, 3, 2, 6, 1, 2])) # 5
