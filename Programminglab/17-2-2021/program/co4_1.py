class Rectangle:
    def __init__(self,l,b):
        self.length=l
        self.breadth=b
    def area(self):
        return self.length*self.breadth
    def perimeter(self):
        return 2*(self.length+self.breadth)
    def comparison(self,obj):
        if self.area()>obj.area():
            print(' The highest area of Rectangle with  length =',self.length,'and breadth =',self.breadth)
        elif self.area()<obj.area():
            print(' The highest area of Rectangle with length =',obj.length, 'and breadth =', obj.breadth)
        else:
            print('They have equal area!')
r1=Rectangle(10,20)
r2=Rectangle(50,60)
r1.comparison(r2)
