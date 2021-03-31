class Time:
    def __init__(self,h,m,s):
        self.hour=h
        self.minute=m
        self.second=s
    def __add__(self,other):
        hour = int((self.hour + other.hour) % 24 + (self.minute + other.minute) / 60)
        minute = int((self.minute + other.minute) % 60 + ((self.second + other.second) / 60))
        second=int((self.second + other.second)%60)
        print('Time= ',hour,'hour:',minute,'minute:',second,'second')
T1=Time(10,20,15)
T2=Time(16,45,56)
T1 + T2