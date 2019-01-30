# Complete the angryProfessor function below.
def angryProfessor(k, a):
    arrive = 0
    for i in range(len(a)):
        if a[i] <= 0:
            arrive += 1

    return 'NO' if arrive >= k else 'YES'


print(angryProfessor(3, [-1, -3, 4, 2]))  # YES
print(angryProfessor(2, [0, -1, 2, 1]))  # NO
print(angryProfessor(4, [-93, -86, 49, -62, -90, -63, 40, 72, 11, 67]))  # NO