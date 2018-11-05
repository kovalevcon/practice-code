def allLongestStrings(inputArray):
    """
    :type inputArray: list
    :rtype: list
    """
    max_length = len(max(inputArray, key=len))
    return [x for x in inputArray if len(x) == max_length]


print(allLongestStrings(["aba", "aa", "ad", "vcd", "aba"]))  # ["aba", "vcd", "aba"]