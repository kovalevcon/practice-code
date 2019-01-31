# Complete the evaporator function below.
def evaporator(content, evap_per_day, threshold):
    """
    :type content: int
    :type evap_per_day: int
    :type threshold: int
    :rtype: int
    """
    days = 0
    gas = 100
    while gas > threshold:
        gas -= gas * evap_per_day / 100
        days += 1

    return days


print(evaporator(10, 10, 10))  # 22
print(evaporator(50, 12, 1))  # 37
print(evaporator(10, 1, 1))  # 459