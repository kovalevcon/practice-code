import re


def disemvowel(string):
    """
    :type string: str
    :rtype: str
    """
    return re.sub(r'[aeiou]', '', string, flags=re.I)


print(disemvowel('This website is for losers LOL!'))  # 'Ths wbst s fr lsrs LL!'
print(disemvowel('The test is OK!'))  # 'Th tst s K!'