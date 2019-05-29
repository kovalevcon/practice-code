from typing import List


# Complete the jumpingOnClouds function below.
def jumpingOnClouds(c: List[int]) -> int:
    jumps = 0
    c = c[1:]
    while len(c) > 1:
        part = 2 if c[1] == 0 else 1
        c = c[part:]
        jumps += 1

    return jumps + len(c)


print(jumpingOnClouds([0, 0, 0, 1, 0, 0]))  # 3
print(jumpingOnClouds([0, 0, 1, 0, 0, 1, 0]))  # 4