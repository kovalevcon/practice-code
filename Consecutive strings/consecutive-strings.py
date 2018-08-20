# Complete the longest_consec function below.
def longest_consec(strarr, k):
    longest = ''
    arr_len = len(strarr)
    if arr_len == 0 or k > arr_len or k <= 0:
        return longest

    for i in range(arr_len):
        temp = ''.join(strarr[i:i + k])
        if len(temp) > len(longest):
            longest = temp

    return longest


print(longest_consec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1))  # "oocccffuucccjjjkkkjyyyeehh"