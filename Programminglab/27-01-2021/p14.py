Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> a = int(input("Input an integer : "))
Input an integer : 6
>>> n1 = int( "%s" % a )
>>> n2 = int( "%s%s" % (a,a))
>>> n3 = int( "%s%s%s" % (a,a,a))
>>> print (n1+n2+n3)
738
>>> 