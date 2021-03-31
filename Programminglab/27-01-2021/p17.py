Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> y={'orange':3,'apple':2,'mango':1}
>>> l=list(y.items())
>>> l.sort()
>>> print('Ascending order is',l)
Ascending order is [('apple', 2), ('mango', 1), ('orange', 3)]
>>> l=list(y.items())
>>> l.sort(reverse=True)
>>> print('Descending order is',l)
Descending order is [('orange', 3), ('mango', 1), ('apple', 2)]
>>> 