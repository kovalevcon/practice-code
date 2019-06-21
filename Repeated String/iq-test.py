def repeatedString(s: str, n: int) -> int:
    """
    :type s: str
    :type n: int
    :rtype: int
    """
    if s == "a":
        return n
    elif s.find("a") == -1:
        return 0
    length = len(s)

    return (s.count("a") * int(n / length)) + s[0:n % length].count("a")


print(repeatedString("abcac", 10))  # 4
print(repeatedString("aba", 10))  # 7
print(repeatedString("a", 1000000000000))  # 1000000000000