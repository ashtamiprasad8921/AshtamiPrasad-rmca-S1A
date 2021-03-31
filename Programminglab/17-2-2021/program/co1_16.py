a=input("enter the first string:")
b=input("enter the second string:")
x=a[0:1]
a=a.replace(a[0:1],b[0:1])
b=b.replace(b[0:1],x)
print(a,b)