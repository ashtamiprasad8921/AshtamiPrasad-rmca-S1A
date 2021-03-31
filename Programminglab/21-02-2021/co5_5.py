import csv
csv_columns = ['id','Column1', 'Column2', 'Column3']
dictdata = {'id':['1', '2', '3'],
    'Column1':[33, 25, 56],
    'Column2':[35, 30, 30],
    'Column3':[21, 40, 55]
             }
csv_file = "temp.csv"
try:
   with open(csv_file, 'w') as csvfile:
       writer = csv.DictWriter(csvfile, fieldnames=csv_columns)
       writer.writeheader()
       for data in dictdata:
           writer.writerow(dictdata)
except IOError:
   print("I/O error")
data = csv.DictReader(open(csv_file))
print("CSV file  dictionary:\n")
for row in data:
   print(row)