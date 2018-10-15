def centuryFromYear(year):
    """
    :type year: int
    :rtype: int
    """
    return year // 100 if year % 100 == 0 else year // 100 + 1


print(centuryFromYear(1900))  # 19
print(centuryFromYear(1724))  # 18
