import re


def abbreviate(s):
    """
    :type s: str
    :rtype: str
    """
    result = ''
    word = ''
    for symbol in s:
        if re.search("[^a-zA-Z]", symbol):
            result += "{}{}".format(i18n(word), symbol)
            word = ''
        else:
            word += symbol
    if len(word):
        result += i18n(word)

    return result


def i18n(s):
    """
    :type s: str
    :rtype: str
    """
    ln = len(s)
    return s if ln < 4 else "{}{}{}".format(s[0], ln - 2, s[ln - 1])

# Other short variant
# regex = re.compile('[a-z]{4,}', re.IGNORECASE)
#
# def replace(match):
#     word = match.group(0)
#     return word[0] + str(len(word) - 2) + word[-1]
#
# def abbreviate(s):
#     return regex.sub(replace, s)

print(abbreviate('elephant-rides are really fun!'))  # e6t-r3s are r4y fun!
print(abbreviate("internationalization"))  # i18n