def iq_test(numbers: str) -> int:
    """
    :type numbers: str
    :rtype: int
    """
    arr_int = [int(i) % 2 for i in numbers.split()]
    diff_val = 0 if arr_int.count(1) > 1 else 1
    return arr_int.index(diff_val) + 1


print(iq_test("2 4 7 8 10"))  # 3
print(iq_test("1 2 2"))  # 1
print(iq_test("5 3 2"))  # 3