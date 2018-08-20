# Complete the migratoryBirds function below.
def migratoryBirds(arr):
    arr_counts = [
        arr.count(1),
        arr.count(2),
        arr.count(3),
        arr.count(4),
        arr.count(5)
    ]
    return 1 + arr_counts.index(max(arr_counts))


print(migratoryBirds([1, 4, 4, 4, 5, 3]))  # 4
