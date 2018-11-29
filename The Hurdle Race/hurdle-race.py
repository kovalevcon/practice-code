# Complete the hurdleRace function below.
def hurdleRace(k, height):
    mx = max(height)

    return abs(mx - k) if mx > k else 0


print(hurdleRace(4, [1, 6, 3, 5, 2]))  # 2
print(hurdleRace(7, [2, 5, 4, 5, 2]))  # 0