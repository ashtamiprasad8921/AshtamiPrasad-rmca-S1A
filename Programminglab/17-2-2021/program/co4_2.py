class Account:
    def __init__(self,a,n,t,b):
        self.no=a
        self.name=n
        self.type=t
        self.balance=b
    def deposit(self,a):
        self.balance=balance+a
        print('Rs.',a,'deposited! Current balance is: Rs.',self.balance)
    def withdraw(self,a):
        if self.balance >= a:
            self.balance-=a
            print('Rs.',a,'withdrawn! Current balance is: Rs.', self.balance)
        else:
            print('Insufficient balance to make this transaction!')
a=int(input('Enter account number:'))
n=input('Enter name of the account holder: ')
t=input('Enter account type: ')
b=float(input('Enter your balance:'))
ac1=Account(a,n,t,b)
ac1.deposit(float(input('Enter amount to deposit: ')))
ac1.withdraw(float(input('Enter amount to withdraw: ')))