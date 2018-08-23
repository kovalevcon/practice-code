def race(v1, v2, g):
    if v1 >= v2:
        return None

    hours = g / (v2 - v1)
    return [res / 3600, res % 3600 / 60, res % 60]


print(race(720, 850, 70))  # 13.09.2017
