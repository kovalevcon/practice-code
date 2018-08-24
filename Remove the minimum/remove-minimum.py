def remove_smallest(numbers):
    copy = numbers.copy()
    if len(copy):
        copy.remove(min(copy))

    return copy


print(remove_smallest([2, 2, 1, 2, 1]))
