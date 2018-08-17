# Complete the reverseArray function below.
def reverseArray(a):
    return list(a[i] for i in range(len(a) - 1, -1, -1))


print(reverseArray([2, 3, 4, 1]))  # [1, 4, 3, 2]