

def getTotalX(a, b):
    lcm = calc_for_array(a, 'lcm')
    gcd = calc_for_array(b, 'gcd')

    count = 0
    multiple_lcm = lcm
    while multiple_lcm <= gcd:
        if gcd % multiple_lcm == 0:
            count += 1
        multiple_lcm += lcm

    return count


def gcd(a, b):
    if b == 0:
        return a
    return int(gcd(b, a % b))


def lcm(a, b):
    return int(a * (b / gcd(a, b)))


def calc_for_array(arr, name):
    result = arr[0]
    for i in range(len(arr)):
        result = globals()[name](result, arr[i])

    return result


print(getTotalX([2, 4], [16, 32, 96]))
