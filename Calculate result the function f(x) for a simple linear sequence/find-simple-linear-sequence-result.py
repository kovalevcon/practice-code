def get_function(sequence):

    m, n = sequence[0], sequence[1]

    if sequence == [0, 1, 2, 3, 4]:
        def fx(x):
            return x
        return fx  # "f(x) = x"
    elif sequence == [m] * 5:
        def fm(x):
            return m
        return fm  # "f(x) = m"
    elif m == 0 and sequence == [0, 1 * n, 2 * n, 3 * n, 4 * n]:
        def fmx(x):
            return n * x
        return fmx  # "f(x) = nx"
    elif sequence == [m, 1 + m, 2 + m, 3 + m, 4 + m]:
        def fx_m(x):
            return x + m
        return fx_m  # "f(x) = x +- m"
    else:
        n -= m
        if sequence == [m, n * 1 + m, n * 2 + m, n * 3 + m, n * 4 + m]:
            def fnx_m(x):
                return n * x + m
            return fnx_m  # "f(x) = nx +- m"

    return 'Non-linear sequence'


print(get_function([0, 1, 2, 3, 4])(5))  # f(x) = x = 5
print(get_function([2, 2, 2, 2, 2])(5))  # f(x) = n = 2
print(get_function([0, 3, 6, 9, 12])(5))  # f(x) = 3x = 15
print(get_function([1, 2, 3, 4, 5])(5))  # f(x) = x + 1 = 6
print(get_function([-2, -1, 0, 1, 2])(5))  # f(x) = x - 2 = 3
print(get_function([2, 4, 6, 8, 10])(5))  # f(x) = 2x + 2
print(get_function([-1, -4, -7, -10, -13])(5))  # f(x) = -3x - 1