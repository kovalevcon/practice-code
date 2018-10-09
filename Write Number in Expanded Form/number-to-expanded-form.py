def expanded_form(num):
    """
    :type num: int
    :rtype str
    """
    res = []
    delimiters = [10**x for x in range(len(str(num)) - 1, 0, -1)]
    for delimiter in delimiters:
        quotient, remain = divmod(num, delimiter)
        res.append(quotient * delimiter)
        num = remain

    if num != 0:
        res.append(num)

    return ' + '.join(list(map(str, res)))


print(expanded_form(757269))  # '700000 + 50000 + 7000 + 200 + 60 + 9'
print(expanded_form(12))  # '10 + 2'
print(expanded_form(42))  # '40 + 2'
print(expanded_form(70304))  # '70000 + 300 + 4'