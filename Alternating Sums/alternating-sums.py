def alternatingSums(a):
    """
    :type a: List[int]
    :rtype: List[int]
    """
    return [sum(a[::2]), sum(a[1::2])]


print(alternatingSums([50, 60, 60, 45, 70]))  # [180, 105]
print(alternatingSums([100, 51, 50, 100]))  # [150, 151]