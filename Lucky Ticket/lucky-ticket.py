def isLucky(n):
    """
    :type n: int 
    :rtype: bool 
    """
    arr = [int(x) for x in str(n)]
    middle = int(len(arr) / 2)

    return sum(arr[0:middle]) == sum(arr[middle:])


print(isLucky(1230))  # True
print(isLucky(239017))  # False