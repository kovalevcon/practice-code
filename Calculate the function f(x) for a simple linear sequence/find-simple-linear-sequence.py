def get_function(sequence):

    m, n = sequence[0], sequence[1]

    if sequence == [0, 1, 2, 3, 4]:
        return 'f(x) = x'
    elif sequence == [m] * 5:
        return "f(x) = %d" % m
    elif m == 0 and sequence == [0, 1 * n, 2 * n, 3 * n, 4 * n]:
        return "f(x) = %dx" % n
    elif sequence == [m, 1 + m, 2 + m, 3 + m, 4 + m]:
        return "f(x) = x + %d" % m if m > 0 else 'f(x) = x - %d' % abs(m)
    else:
        n -= m
        if sequence == [m, n * 1 + m, n * 2 + m, n * 3 + m, n * 4 + m]:
            if abs(n) == 1:
                return "f(x) = -x + %d" % m if m > 0 else "f(x) = x - %d" % abs(m)
            return "f(x) = %dx + %d" % (n, m) if m > 0 else "f(x) = %dx - %d" % (n, abs(m))

    return 'Non-linear sequence'


print(get_function([0, 1, 2, 3, 4]))
print(get_function([-19, -20, -21, -22, -23]))
