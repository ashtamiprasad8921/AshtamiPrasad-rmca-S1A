def fibo(n):
    if n <= 1:
        return n
    else:
        return (fibo(n - 1) + fibo(n - 2))


nterms = int(input("Enter the value of 'n': "))

if nterms <= 0:
    print("No Fibonacci sequence:")
else:
    print("Fibonacci sequence:")
    for i in range(nterms):
        print(fibo(i))


