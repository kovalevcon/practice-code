from functools import reduce
from math import gcd


def lcms(numbers):
    """
    source for lcms func - https://gist.github.com/endolith/114336/eff2dc13535f139d0d6a2db68597fad2826b53c3
    :type numbers: list
    :rtype: int
    """
    return int(reduce(lambda x, y: (x * y) / gcd(int(x), int(y)), numbers, 1))


def sum_fracts(lst):
    """
    :type lst: list
    :rtype: list
    """
    if not len(lst):
        return None

    numerator = 0
    denominator = lcms([x[1] for x in lst])

    for i in range(0, len(lst)):
        k = int(denominator / lst[i][1])
        numerator += k * lst[i][0]

    final_gcd = gcd(numerator, denominator)
    return [int(numerator / final_gcd), int(denominator / final_gcd)] \
        if numerator % denominator != 0 else int(numerator / denominator)


print(sum_fracts([[62, 63], [62, 64]]))  # [3937, 2016]
print(sum_fracts([[1, 3], [5, 3]]))  # 2
print(sum_fracts([[1, 2], [1, 3], [1, 4]]))  # [13, 12]