def commonCharacterCount(s1, s2):
    """
    :type s1: str
    :type s2: str
    :rtype: int
    """
    result = 0
    unique = [i for i in set(s1)]
    for i in unique:
        result += min(s1.count(i), s2.count(i))

    return result


print(commonCharacterCount("aabcc", "adcaa"))  # 3
print(commonCharacterCount("zzzz", "zzzzzzz"))  # 4