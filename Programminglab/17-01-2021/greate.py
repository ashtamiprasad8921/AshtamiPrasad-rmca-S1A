Python 3.9.1 (tags/v3.9.1:1e5d33e, Dec  7 2020, 17:08:21) [MSC v.1927 64 bit (AMD64)] on win32
Type "help", "copyright", "credits" or "license()" for more information.
>>> x=int(input("Enter the first Number:"))
Enter the first Number:10
>>> y=int(input("Enter the second Number:"))
Enter the second Number:6
>>> z=int(input("Enter the third Number:"))
Enter the third Number:15
>>> if(x>y)and(x>z):
	largest=x
elif(y>x)and(y>z):
	largest=y
else:
	largest=z

	
>>> print("the largest number is:",largest)
the largest number is: 15
>>> 