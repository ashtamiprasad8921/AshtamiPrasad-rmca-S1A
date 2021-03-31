class Publisher:
    def __init__(self,name):
        self.name=name
    def show(self):
        pass
class Book(Publisher):
    def __init__(self,title,author,name):
        self.title=title
        self.author=author
        Publisher.__init__(self,name)
    def show(self):
        pass
class Python(Book):
    def __init__(self,p,no,title,author,name):
        self.price=p
        self.no_of_pages=no
        Book.__init__(self,title,author,name)
    def show(self):
        print(' Title of the book:',self.title)
        print('Author of the book :',self.author)
        print('Publisher of the book:',self.name)
        print('Price of the book:',self.price)
        print('No of pages in the book:',self.no_of_pages)
P1=Python(400,100,'python','GV Rossum','books pvt')
P1.show()