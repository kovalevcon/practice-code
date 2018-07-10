from datetime import datetime

#
# Complete the timeConversion function below.
#
def timeConversion(s):
    return datetime.strptime(s, '%I:%M:%S%p').strftime('%H:%M:%S')


print(timeConversion('07:05:45PM'))