def unique_in_order(iterable):
    """
    :type iterable: str|list
    :rtype: list
    """
    res = []

    if len(iterable):
        item = iterable[0]
        res.append(item)
        for it in iterable[1:]:
            if it != item:
                item = it
                res.append(item)

    return res


print(unique_in_order('AAAABBBCCDAABBB'))  # ['A', 'B', 'C', 'D', 'A', 'B']
print(unique_in_order('ABBCcAD'))  # ['A', 'B', 'C', 'c', 'A', 'D']
print(unique_in_order([1, 2, 2, 3, 3]))  # [1, 2, 3]
