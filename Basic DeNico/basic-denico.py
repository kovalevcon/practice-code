def de_nico(key, msg):
    """
    :type key: str
    :type msg: str
    :rtype: str
    """
    len_key = len(key)
    keys = dict(zip(key, [int(''.join(sorted(key)).find(x)) for x in key]))

    res = ''
    for i in range(0, len(msg), len_key):
        for x in key:
            temp = msg[i: i + len_key]
            try:
                res += temp[keys[x]]
            except IndexError:
                pass

    return res.rstrip()


print(de_nico("crazy", "cseerntiofarmit on"))  # secretinformation
