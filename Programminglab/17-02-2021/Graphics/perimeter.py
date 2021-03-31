import cir
from rect import *
from Graphics.__3Dgraphics import cuboid,sphere
l1=float(input('Enter length of the rectangle: '))
b1=float(input('Enter breadth of the rectangle: '))
perimeter(l1,b1)
r=float(input('Enter the radius of the circle: '))
cir.circumference(r)
l2=float(input('Enter length of the cuboid: '))
b2=float(input('Enter breadth of the cuboid: '))
h2=float(input('Enter height of the cuboid: '))
cuboid.perimeter(l2,b2,h2)
r=float(input('Enter the radius of the sphere: '))
sphere.perimeter(r)