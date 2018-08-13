import re


def travel(r, zipcode):
    matches = re.findall('(\d+) ([^,]+)? %s,' % zipcode, r)
    return '%s:' % zipcode + ','.join([x[1] for x in matches]) + '/' + ','.join([x[0] for x in matches]) \
        if len(matches) else '%s:/' % zipcode


print(travel('123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street ' +
       'Pollocksville NY 56432', 'OH 43071'))