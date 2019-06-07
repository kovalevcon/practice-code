from typing import List


def checkPossibility(nums: List[int]) -> bool:
    pos = 0
    for i in range(1, len(nums)):
        if nums[i - 1] > nums[i]:
            pos += 1
            if (i - 2) > -1 and nums[i - 2] > nums[i]:
                nums[i] = nums[i - 1]
            else:
                nums[i - 1] = nums[i]

    return pos < 2


print(checkPossibility([4, 2, 3]))  # True
print(checkPossibility([4, 2, 1]))  # False