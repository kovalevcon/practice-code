# Complete the matchingStrings function below.
def matchingStrings(strings, queries):
    """
    :type strings: List[str]
    :type queries: List[str]
    :rtype: List[int]
    """
    hash = {}
    for s in strings:
        hash[s] = hash[s] + 1 if s in hash else 1

    res = []
    for q in queries:
        res.append(hash.get(q) if q in hash else 0)

    return res


print(matchingStrings(['aba', 'baba', 'aba', 'xzxb'], ['aba', 'xzxb', 'ab']))  # [2, 1, 0]
