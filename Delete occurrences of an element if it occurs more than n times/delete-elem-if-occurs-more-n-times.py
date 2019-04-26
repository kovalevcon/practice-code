def delete_nth(order: list, max_e: int) -> list:
    """
    :type order: list
    :type max_e: int
    :rtype: list
    """
    repeats = {}

    def filter_by_max(max):
        def filter_inner(x):
            repeats[x] = 1 if x not in repeats else repeats[x] + 1
            return repeats[x] <= max

        return filter_inner

    return list(filter(filter_by_max(max_e), order))


print(delete_nth([20, 37, 20, 21], 1))  # [20, 37, 21]
print(delete_nth([1, 1, 3, 3, 7, 2, 2, 2, 2], 3))  # [1, 1, 3, 3, 7, 2, 2, 2]
print(delete_nth([1, 2, 3, 1, 1, 2, 1, 2, 3, 3, 2, 4, 5, 3, 1], 3))  # [1, 2, 3, 1, 1, 2, 2, 3, 3, 4, 5]