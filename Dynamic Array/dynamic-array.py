def dynamicArray(n, queries):
    last_ans = 0
    empty_list = [[]] * n
    result = []

    for query in queries:
        index = (query[1] ^ last_ans) % n
        if query[0] == 1:
            empty_list[index] = empty_list[index] + [query[2]]
        else:
            number = query[2] % len(empty_list[index])
            last_ans = empty_list[index][number]
            result.append(last_ans)

    return result


print(dynamicArray(2, [
    [1, 0, 5],
    [1, 1, 7],
    [1, 0, 3],
    [2, 1, 0],
    [2, 1, 1]
]))