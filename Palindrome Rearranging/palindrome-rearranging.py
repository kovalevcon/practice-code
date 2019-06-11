def palindromeRearranging(inputString: str) -> bool:
    """
    :type inputString: str
    :rtype: bool
    """
    counts = {}
    for x in tuple(inputString):
        if x in counts:
            counts[x] += 1
        else:
            counts[x] = 1

    for k in counts.keys():
        counts[k] = counts[k] % 2

    return sum(counts.values()) <= 1


print(palindromeRearranging("abbcabb"))  # True
print(palindromeRearranging("zaa"))  # True
print(palindromeRearranging("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaabc"))  # False