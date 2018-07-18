#!/bin/python3

# import math
# import os
# import random
# import re
# import sys


def count_fruits(fruits, a, s ,t):
    return len([elem for elem in fruits if s <= a + elem <= t])


# Complete the countApplesAndOranges function below.
def countApplesAndOranges(s, t, a, b, apples, oranges):
    print("{}\r\n{}".format(count_fruits(apples, a, s, t), count_fruits(oranges, b, s, t)))

# if __name__ == '__main__':
#     st = input().split()
#
#     s = int(st[0])
#
#     t = int(st[1])
#
#     ab = input().split()
#
#     a = int(ab[0])
#
#     b = int(ab[1])
#
#     mn = input().split()
#
#     m = int(mn[0])
#
#     n = int(mn[1])
#
#     apples = list(map(int, input().rstrip().split()))
#
#     oranges = list(map(int, input().rstrip().split()))


countApplesAndOranges(7, 11, 5, 15, [-2, 2, 1], [5, -6])

