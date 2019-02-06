def searchInsert(nums: 'list[int]', target: 'int') -> 'int':
    for i in range(len(nums)):
        if nums[i] >= target:
            return i
    return len(nums)


print(searchInsert([1, 3, 5, 6], 6))  # 3
print(searchInsert([1, 3, 5, 6], 7))  # 4
print(searchInsert([1, 3, 5, 6], 2))  # 1