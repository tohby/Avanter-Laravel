create database Avanter;
use Avanter;

create table Manager(
ManID char(5) primary key,
Username nvarchar(50),
Pass nvarchar(50),
Fullname nvarchar(100)
);

create table Staff(
StaffID char(5) primary key,
Username nvarchar(50),
Pass nvarchar(50),
fullname nvarchar(100)
);

create table Categories(
CatID char(5) primary key,
CatName nvarchar(50),
CatDesc nvarchar(500)
);

create table Product(
ProductID char(5) primary key,
CatID char(5),
ProductName nvarchar(100),
ProductDesc nvarchar(500),
Price money,
Quantity int
Foreign key(CatID) references Categories(CatID)
);

drop table Product;

create table Customer(
CustID char(5) primary key,
CustName nvarchar(50),
CustAddress nvarchar(200),
CustEmail nvarchar(200),
CustUsername nvarchar(200),
CustPass nvarchar(50)
);

create table Orders(
OrderID char(5) primary key,
CustID char(5),
OrderDate date,
EstDelDate date,
TotalPrice money
Foreign key (CustID) references Customer(CustID)
);

create table OrderItem(
OrderID Char(5),
ProdID char(5),
Quantity int,
Price money,
Foreign key(OrderID) references Orders(OrderID),
Foreign Key(ProdID) references Product(ProductID)
);

create table Cart(
CartID Char(5) primary key,
CustID char(5),
TotalPrice money,
Foreign key(CustID) references Customer(CustID)
);

drop table Cart;

Create table CartItem(
CartID Char(5),
Quantity int,
Price money,
Foreign key(CartID) references Cart(CartID),
);