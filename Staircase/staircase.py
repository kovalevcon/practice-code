
def staircase(n):
    for i in range(1, n+1):
        print("{0}{1}".format(' '*(n - i), '#'*i))


staircase(6)
