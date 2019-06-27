def buddyStrings(a: str, b: str) -> bool:
    if len(a) != len(b):
        return False
    if a == b and len(set(a)) < len(a):
        return True
    pairs = [(x, y) for x, y in zip(a, b) if x != y]
    return len(pairs) == 2 and pairs[0] == pairs[1][::-1]


print(buddyStrings("ab", "ba"))  # True
print(buddyStrings("ab", "ab"))  # False
print(buddyStrings("aaaaaaabc", "aaaaaaacb"))  # True