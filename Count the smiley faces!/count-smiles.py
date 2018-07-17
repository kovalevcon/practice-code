import re


def count_smileys(arr):
    return len(re.findall('[:;][-~]?[)D]', ''.join(arr)))


print(count_smileys([':)', ';(', ';}', ':-D']))