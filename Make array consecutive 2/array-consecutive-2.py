def makeArrayConsecutive2(statues):
    """
    :rtype statues: list
    :return: int
    """
    return len(range(min(statues), max(statues) + 1)) - len(statues)


print(makeArrayConsecutive2([6, 2, 3, 8]))  # 3
print(makeArrayConsecutive2([0, 3]))  # 2
print(makeArrayConsecutive2([5, 4, 6]))  # 0
