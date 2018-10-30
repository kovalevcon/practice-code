def pickingNumbers(a):
    """
    :type a: list
    :rtype: int
    """
    counts = []
    for i in set(a):
        counts.append(len([x for x in a if x == i or x == i + 1]))

    return max(counts)


print(pickingNumbers([4, 6, 5, 3, 3, 1]))  # 3
print(pickingNumbers([1, 2, 2, 3, 1, 2]))  # 5