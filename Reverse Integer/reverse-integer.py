class Solution:
    def reverse(self, x):
        """
        :type x: int
        :rtype: int
        """
        min_int = -2**31
        max_int = 2**31 - 1

        if x == 0 or max_int < x < min_int:
            return 0

        rev = int(str(abs(x))[::-1]) * int((x / abs(x)))
        return rev if max_int > rev > min_int else 0


solution = Solution()
print(solution.reverse(-123))  # -321
print(solution.reverse(1534236469))  # Over max int, then result 0
