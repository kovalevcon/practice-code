
def gradingStudents(grades):
    return map(check_multiple, grades)


def check_multiple(grade):
    multiple = grade + (5 - grade % 5)
    return multiple if grade >= 38 and multiple - grade < 3 else grade


print(" ".join(map(str, gradingStudents([73, 67, 38, 33]))))