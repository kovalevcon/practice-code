def addBorder(picture: 'list[str]') -> 'list[str]':
    """
    :type picture: list
    :rtype: list
    """
    return [(len(picture[0]) + 2) * '*'] + ['*' + x + '*' for x in picture] + [(len(picture[0]) + 2) * '*']


print(addBorder(["abc", "ded"]))  # ["*****", "*abc*", "*ded*", "*****"]
print(addBorder(["a"]))  # ["***", "*a*", "***"]
print(addBorder(["aa", "**", "zz"]))  # ["****", "*aa*", "****", "*zz*", "****"]