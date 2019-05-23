from typing import List


def arrayChange(inputArray: List[int]) -> int:
    """
    :type inputArray: List[int]
    :rtype: int
    """
    changes = 0
    for i in range(1, len(inputArray)):
        if inputArray[i] <= inputArray[i - 1]:
            changes += inputArray[i - 1] - inputArray[i] + 1
            inputArray[i] = inputArray[i - 1] + 1

    return changes


print(arrayChange([1, 1, 1]))  # 3
print(arrayChange([-1000, 0, -2, 0]))  # 5
print(arrayChange([3122, -645, 2616, 13213, -8069]))  # 25559