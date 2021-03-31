import datetime
year=datetime.datetime.now()
year=int(year.year)
b=int(input("Enter final year: "))
print("\nLeap Years:")
for i in range(year,b+1):
    if(i%1==0):
        print(i)

