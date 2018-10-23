def duplicate_count(text):
    """
    :type text: str
    :rtype: int
    """
    text = text.lower()
    return len([x for x in set(text) if text.count(x) > 1])


print(duplicate_count("abcde"))  # 0
print(duplicate_count("aabbcde"))  # 2
print(duplicate_count("Indivisibilities"))  # 2