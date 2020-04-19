# Complete the hurdleRace function below.
def hurdleRace(k, height):
    return (0 if(k>max(height)) else (max(height)-k))


print(hurdleRace(4, [1, 6, 3, 5, 2]))  # 2
print(hurdleRace(7, [2, 5, 4, 5, 2]))  # 0
