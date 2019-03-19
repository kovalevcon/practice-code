def stock_list(listOfArt: 'list', listOfCat: 'list') -> 'str':
    """
    :type listOfArt: list
    :type listOfCat: list
    :rtype: str
    """
    if not len(listOfArt) or not len(listOfCat):
        return ''

    newList = dict()

    for item in listOfArt:
        key, val = item.split(" ")
        newList[key[0]] = newList[key[0]] + int(val) if key[0] in newList else int(val)

    return " - ".join(list(map(lambda x: '({} : {})'.format(x, newList[x] if x in newList else 0), listOfCat)))

# (A : 0) - (B : 1290) - (C : 515) - (D : 600)
print(stock_list(["BBAR 150", "CDXE 515", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B", "C", "D"]))
# (A : 200) - (B : 1140)
print(stock_list(["ABAR 200", "CDXE 500", "BKWR 250", "BTSQ 890", "DRTY 600"], ["A", "B"]))