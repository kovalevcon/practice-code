# Complete the beautifulDays function below.
def beautifulDays(i: 'int', j: 'int', k: 'int') -> 'int':
    """
    :type i: int
    :type j: int
    :type k: int
    :rtype: int
    """
    count = 0

    while i <= j:
        count += abs(i - int(str(i)[::-1])) % k == 0
        i += 1

    return count


print(beautifulDays(20, 23, 6))  # 2
print(beautifulDays(13, 45, 3))  # 33