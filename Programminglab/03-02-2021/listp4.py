for i in range(1000,10000):
   for j in range(32,99):
       if i == j*j:
           num = str(i)
           if int(num[0])%2 == 0 and int(num[1])%2 == 0 and int(num[2])%2 == 0 and int(num[3])%2 == 0:
               print(i)
