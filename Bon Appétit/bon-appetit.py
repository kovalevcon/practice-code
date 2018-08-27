# Complete the bonAppetit function below.
def bonAppetit(bill, k, b):
    charged = (sum(bill) - bill[k]) / 2
    print('Bon Appetit' if charged == b else int(b - charged))


bonAppetit([3, 10, 2, 9], 1, 12)
bonAppetit([3, 10, 2, 9], 1, 7)
