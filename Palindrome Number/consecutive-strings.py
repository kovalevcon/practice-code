class Solution:
    def isPalindrome(self, x):
        """
        :type x: int
        :rtype: bool
        """
        if x < 0:
            return False
        elif 0 <= x < 9:
            return True

        num = x
        reverse = ""
        while num > 0:
            reverse += str(num % 10)
            num //= 10

        return x == int(reverse)


solution = Solution()
print(solution.isPalindrome(121))  # True