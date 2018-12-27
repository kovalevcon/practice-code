def reverseParentheses(s):
    """
    :type s: str
    :rtype: str
    """
    while True:
        match = re.findall('\([\w\s]+\)', s)
        if len(match) == 0:
            break
        old = match[0]
        new = re.sub('[()]', '', old)[::-1]
        s = s.replace(old, new)

    return s


print(reverseParentheses('Code(Cha(lle)nge)'))  # 'CodeegnlleahC'
print(reverseParentheses('The ((quick (brown) (fox) jumps over the lazy) dog)'))  # 'The god quick nworb xof jumps over the lazy'