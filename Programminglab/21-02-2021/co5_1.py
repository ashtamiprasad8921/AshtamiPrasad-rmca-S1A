def file_read(fname):
    with open(fname) as f:
        c=f.readlines()
        print(c)
        print(len(c))
file_read("demo.txt")