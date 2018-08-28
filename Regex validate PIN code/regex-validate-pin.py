import re


def validate_pin(pin):
    return bool(len(pin) in [4, 6] and re.search('^[\d]+$', pin))


print(validate_pin("1234"))  # True
print(validate_pin("s1234s"))  # False
