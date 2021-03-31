Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> list = [11, 22, 33, 44, 55]
>>> print(list)
[11, 22, 33, 44, 55]
>>> for i  in list:
	if(i%2 == 0):
		list.remove(i)

		
>>> print("list after removing EVEN numbers:",list)
list after removing EVEN numbers: [11, 33, 55]
>>> 