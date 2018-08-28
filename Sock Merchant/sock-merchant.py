from collections import Counter

# Complete the sockMerchant function below.
def sockMerchant(n, ar):
    return sum(map(lambda x: int(x / 2), list(Counter(ar).values())))


print(sockMerchant(9, [10, 20, 20, 10, 10, 30, 50, 10, 20]))  # 3
