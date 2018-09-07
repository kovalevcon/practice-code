def countingValleys(n, s):
    count, sea_level = [0, 0]
    for chr in list(s):
        if chr == 'U':
            sea_level += 1
            if sea_level == 0:
                count += 1
        else:
            sea_level -= 1

    return count


print(countingValleys(8, 'UDDDUDUU'))  # 1
print(countingValleys(12, 'DDUUDDUDUUUD'))  # 2