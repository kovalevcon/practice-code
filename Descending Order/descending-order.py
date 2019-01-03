def Descending_Order(num):
    """
    :type num: int
    :rtype: int
    """
    return int(''.join(sorted([x for x in str(num)], key=int, reverse=True)))


print(Descending_Order(1021))  # 2110
print(Descending_Order(123456789))  # 987654321