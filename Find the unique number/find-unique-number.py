def find_uniq(arr):
    """
    :type arr: list
    :rtype: int,float
    """
    a, b = set(arr)

    return a if arr.count(a) == 1 else b


print(find_uniq([1, 1, 1, 2, 1, 1]))  # 2
print(find_uniq([0, 0, 0.55, 0, 0]))  # 0.55
print(find_uniq([3, 10, 3, 3, 3]))  # 10