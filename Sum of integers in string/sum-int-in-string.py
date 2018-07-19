from re import split


def sum_of_integers_in_string(s):
    return sum([int(e) for e in split('[^\d]', s) if e != ''])


print(sum_of_integers_in_string('The30quick20brown10f0x1203jumps914ov3r1349the102l4zy dog'))
