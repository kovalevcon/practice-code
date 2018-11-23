class Solution:
    def isValid(self, s):
        """
        :type s: str
        :rtype: bool
        """
        if s == '':
            return True
        elif len(s) % 2 == 1:
            return False

        brackets = {
            '(': {')': False, ']': True, '}': True},
            '[': {')': True, ']': False, '}': True},
            '{': {')': True, ']': True, '}': False},
        }

        stack = []
        for x in list(s):
            if x in ['(', '[', '{']:
                stack.append(x)
            elif not len(stack) or brackets[stack.pop()][x]:
                return False

        return not len(stack)


solution = Solution()
print(solution.isValid('()[]{}'))  # True
print(solution.isValid('([)]'))  # False

