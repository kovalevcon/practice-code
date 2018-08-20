# Complete the migratoryBirds function below.
def migratoryBirds(arr):
    count = [0] * 6
    for t in map(int, arr):
        count[t] += 1

    return count.index(max(count))

    # arr_counts = [
    #     arr.count(1),
    #     arr.count(2),
    #     arr.count(3),
    #     arr.count(4),
    #     arr.count(5)
    # ]
    # return 1 + arr_counts.index(max(arr_counts))


print(migratoryBirds([1, 4, 4, 4, 5, 3]))  # 4
