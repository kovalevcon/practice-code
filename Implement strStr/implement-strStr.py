class Solution:
    def strStr(self, haystack, needle):
        """
        :type haystack: str
        :type needle: str
        :rtype: int
        """
        if not needle:
            return 0
        if not haystack or len(haystack) < len(needle):
            return -1

        length = len(needle)
        for i in range(len(haystack)):
            if haystack[i:i + length] == needle:
                return i
        return -1


solution = Solution()
print(solution.strStr('hello', 'll'))  # 2
print(solution.strStr('aaaaa', 'bba'))  # -1
print(solution.strStr('aaaaa', ''))  # 0