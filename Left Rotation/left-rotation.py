def left_rotate(arr, n):
    return arr[n:] + arr[0:n]


print(" ".join(str(x) for x in left_rotate([1, 2, 3, 4, 5], 4)))
