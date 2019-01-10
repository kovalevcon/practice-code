def utopianTree(n):
    """
    :type n: int
    :rtype: int
    """
    height = 1
    for i in range(1, n + 1):
        if i % 2:
            height *= 2
        else:
            height += 1

    return height


print(utopianTree(0))  # 1
print(utopianTree(1))  # 2
print(utopianTree(4))  # 7