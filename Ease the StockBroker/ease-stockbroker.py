import re


def balance_statement(lst):
    buy_sum = 0.0
    sell_sum = 0.0
    badly = []

    if len(lst):
        for item in lst.split(', '):
            if re.match('^[a-zA-Z0-9.]+\s\d+\s\d*\.\d+\s[BS]$', item):
                order = item.split(' ')
                total = int(order[1]) * float(order[2])
                if order[3] == 'B':
                    buy_sum += total
                else:
                    sell_sum += total
            else:
                badly.append("%s " % item)

    result = "Buy: %d Sell: %d" % (round(buy_sum), round(sell_sum))
    if len(badly) > 0:
        result += "; Badly formed %d: %s;" % (len(badly), ";".join(badly))

    return result


# Buy: 29499 Sell: 0
print(balance_statement('ZNGA 1300 2.66 B, CLH15.NYM 50 56.32 B, OWW 1000 11.623 B, OGG 20 580.1 B'))
