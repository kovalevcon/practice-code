def areSimilar(a: list, b: list) -> bool:
    """
    :type a: list
    :type b: list
    :rtype: bool
    """
    if len(a) != len(b):
        return False
    elif a == b:
        return True

    dict_a = dict(zip([x for x in range(0, len(a))], map(str, a)))
    dict_b = dict(zip([x for x in range(0, len(b))], map(str, b)))
    diff_a = [v for k, v in dict_a.items() if v != dict_b[k]]
    diff_b = [v for k, v in dict_b.items() if v != dict_a[k]]

    return len(diff_a) == 0 or \
           (len(diff_a) == 2 and "".join(diff_a) == "".join(diff_b[::-1]))


print(areSimilar([1, 2, 3], [2, 1, 3]))  # True
print(areSimilar([2, 3], [2, 1, 3]))  # False
print(areSimilar([1, 2, 3], [1, 2, 3]))  # True