def catAndMouse(x, y, z):
    """
    :rtype x: int
    :rtype y: int
    :rtype z: int
    :return: str
    """
    return ['Cat A', 'Cat B', 'Mouse C'][0 if abs(x - z) < abs(y - z) else 1 if abs(y - z) < abs(x - z) else 2]


print(catAndMouse(1, 2, 3))  # 'Cat B'
print(catAndMouse(1, 3, 2))  # 'Mouse C'