a= open('demo.txt', 'r')
b= open('nextdemo.txt','w')
c = a.readlines()
type(c)
for i in range(0, len(c)):
    if (i%2!=0):
        b.write(c[i])
    else:
        pass
b.close()
b = open('nextdemo.txt', 'r')
cont1 = b.read()
print(cont1)
a.close()
b.close()