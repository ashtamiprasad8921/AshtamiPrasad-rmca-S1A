class Rectangle:
    def __init__(self,l,w):
        self.length = l
        self.width = w
        self.area=self.width * self.length
    def __lt__(self, other):
        if self.area < other.area:
            print('The lesser area Rectangle with length=',self.length,'and width=',self.width)
        elif other.area < self.area:
            print('The lesser area Rectangle with length=',other.length,'and width=',other.width)
        else:
            print('They have equal area!')
l=float(input('Enter length of the first  rectangle: '))
w=float(input('Enter width of first rectangle: '))
Rect1=Rectangle(l,w)
l=float(input('Enter length of second rectangle: '))
w=float(input('Enter width of second rectangle: '))
Rect2=Rectangle(l,w)
Rect1<Rect2