def getMoneySpent(keyboards, drives, b):
    total = -1
    keyboards = sorted(keyboards, key=int, reverse=True)
    drives = sorted(drives, key=int, reverse=False)

    for k in keyboards:
        for d in drives:
            if total < k + d <= b:
                total = k + d

    return total


print(getMoneySpent([3, 1], [5, 2, 8], 10))  # 9
print(getMoneySpent([4], [5], 5))  # -1
