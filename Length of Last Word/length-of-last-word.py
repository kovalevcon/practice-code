import re


def lengthOfLastWord(s: str) -> int:
    """
    :type s: str
    :rtype: int
    """
    return len(re.findall('\w+', s).pop()) if re.match('[a-zA-Z]+', s.strip()) else 0


print(lengthOfLastWord("Hello World"))  # 5
print(lengthOfLastWord(" Hello World"))  # 5
print(lengthOfLastWord(" "))  # 0
print(lengthOfLastWord(""))  # 0