def longestCommonPrefix(strs):
    """
    :type strs: List[str]
    :rtype: str
    """
    if not strs:
        return ""
    result = ""
    lowest = min(strs, key=len)
    try:
        for i in range(len(lowest)):
            for word in strs:
                if word[i] != lowest[i]:
                    raise Exception
            result += lowest[i]
    except Exception:
        pass

    return result


print(longestCommonPrefix(["flower", "flow", "flight"]))  # "fl"
print(longestCommonPrefix([]))  # ""