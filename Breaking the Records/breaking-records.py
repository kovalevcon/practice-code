#!/bin/python3

# Complete the breakingRecords function below.
def breakingRecords(scores):
    min_score = max_score = scores[0]
    sum_high = sum_low = 0

    for i in range(1, len(scores)):
        if scores[i] > max_score:
            max_score = scores[i]
            sum_high += 1
        if scores[i] < min_score:
            min_score = scores[i]
            sum_low += 1

    return [sum_high, sum_low]


print('breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1])')
print(breakingRecords([10, 5, 20, 20, 4, 5, 2, 25, 1]))

print('\r\nbreakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42])')
print(breakingRecords([3, 4, 21, 36, 10, 28, 35, 5, 24, 42]))
