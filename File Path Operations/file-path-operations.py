class FileMaster(object):

    def __init__(self, filepath):
        parts = filepath.split('/')
        last_part = len(parts) - 1
        self.__filename, self.__extension = parts[last_part].split('.')
        self.__dirpath = '/'.join(parts[:last_part]) + '/'

    def extension(self):
        return self.__extension
    def filename(self):
        return self.__filename
    def dirpath(self):
        return self.__dirpath


master = FileMaster('/Users/person1/Pictures/house.png')
print(master.extension())  # png
print(master.filename())  # house
print(master.dirpath())  # /Users/person1/Pictures/
