class Solution:
    def removeElement(self, nums, val):
        """
        :type nums: List[int]
        :type val: int
        :rtype: int
        """
        i = 0
        n = len(nums)

        while i < n:
            if nums[i] == val:
                nums[i] = nums[n - 1]
                n -= 1
            else:
                i += 1

        return i


solution = Solution()
print(solution.removeElement([3, 2, 2, 3], 3))  # 2
print(solution.removeElement([0, 1, 2, 2, 3, 0, 4, 2], 2))  # 5