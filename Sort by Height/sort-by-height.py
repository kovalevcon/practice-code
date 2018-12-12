def sortByHeight(a):
    """
    :type a: arr
    :rtype: arr
    """
    without_tree = {}

    for i in range(len(a)):
        if a[i] != - 1:
            without_tree[i] = a[i]

    keys = sorted(list(without_tree.keys()))
    values = sorted(list(without_tree.values()))

    for k in keys:
        a[k] = values.pop(0)

    return a


print(sortByHeight([-1, 150, 190, 170, -1, -1, 160, 180]))  # [-1, 150, 160, 170, -1, -1, 180, 190]
print(sortByHeight([4, 2, 9, 11, 2, 16]))  # [2, 2, 4, 9, 11, 16]