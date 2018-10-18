class Solution:
    def romanToInt(self, s):
        """
        :type s: str
        :rtype: int
        """
        symbols = {'Z': 0, 'I': 1, 'V': 5, 'X': 10, 'L': 50, 'C': 100, 'D': 500, 'M': 1000}

        num = 0
        prev = 'Z'

        for curr in list(s[::-1]):
            num += symbols[curr] if symbols[curr] >= symbols[prev] else -symbols[curr]
            prev = curr

        return num


solution = Solution()
print(solution.romanToInt('III'))  # 3
print(solution.romanToInt('LVIII'))  # 58
print(solution.romanToInt('MCMXCIV'))  # 1994
