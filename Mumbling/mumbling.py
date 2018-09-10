def accum(s):

    result = []
    for i in range(len(s)):
        result.append(s[i].upper() + s[i].lower() * i)

    return "-".join(result)


print(accum("abcd"))  # "A-Bb-Ccc-Dddd"
print(accum("RqaEzty"))  # "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
print(accum("cwAt"))  # "C-Ww-Aaa-Tttt"
