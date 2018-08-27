def max_sum(a, ranges):
    return max(list(map(lambda x: sum(a[x[0]:x[1] + 1]), ranges)))


print(max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 3], [0, 4], [6, 8]]))  # 6
print(max_sum([1, -2, 3, 4, -5, -4, 3, 2, 1], [[1, 4], [2, 5]]))  # 0
