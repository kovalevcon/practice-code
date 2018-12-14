def longest(s1, s2):
    """
    :type s1: str
    :type s2: str
    :rtype: str
    """
    return "".join(sorted(list(set(s1 + s2))))


print(longest("aretheyhere", "yestheyarehere"))  # "aehrsty"
print(longest("loopingisfunbutdangerous", "lessdangerousthancoding"))  # "abcdefghilnoprstu"