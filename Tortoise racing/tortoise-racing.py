from math import floor


def race(v1, v2, g):
    if v1 >= v2:
        return None

    hours = g / (v2 - v1)
    return [floor(hours), floor(hours * 60) % 60, floor(hours * 3600) % 60]


print(race(720, 850, 70))  # [0, 32, 18]
