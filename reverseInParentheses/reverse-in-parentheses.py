def reverseInParentheses(inputString):
    """
    :type inputString: str
    :rtype: str
    """
    first = last = None
    for i in range(len(inputString)):
        if inputString[i] == '(':
            first = i
        elif inputString[i] == ')':
            last = i
        if first is not None and last is not None:
            return reverseInParentheses(
                inputString[:first] + inputString[first + 1:last][::-1] + inputString[last + 1:]
            )

    return inputString


print(reverseInParentheses('(bar)'))  # rab
print(reverseInParentheses('foo(bar)baz(blim)'))  # foorabbazmilb
print(reverseInParentheses('foo(bar(baz))blim'))  # foobazrabblim