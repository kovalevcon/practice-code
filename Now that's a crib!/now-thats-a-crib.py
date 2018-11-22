# Build a penthouse function
def my_crib(n):
    """
    :type n: int
    :rtype: str
    """
    count = n * 2 + 1
    repeat = n * 2
    max_width = int(count + (repeat * 2))
    short_length = int((max_width - count) / 2 - 1)

    spaces = ' ' * repeat
    underscores = '_' * count
    max_spaces = ' ' * (max_width - 2)
    short_spaces = ' ' * short_length
    short_underscores = '_' * short_length

    crib = "{0}{1}{0}\n".format(spaces, underscores)
    for i in range(repeat):
        crib += "{0}/{1}\{0}\n".format(
            ' ' * (repeat - i - 1),
            '_' * (count + (i * 2)),
        )

    crib += "|{}|\n".format(max_spaces) * (n - 1)
    crib += "|{0}{1}{0}|\n".format(spaces, short_underscores)
    crib += "|{0}|{0}|{0}|\n".format(short_spaces) * (n - 1)
    crib += "|{0}|{0}|{0}|".format(short_underscores)

    return crib


print(my_crib(1))  # // '  ___  \n /___\ \n/_____\\n|  _  |\n|_|_|_|'
print(my_crib(2))  # '    _____    \n   /_____\   \n  /_______\  \n /_________\ \n/___________\\n|           |\n|    __
# _    |\n|   |   |   |\n|___|___|___|'