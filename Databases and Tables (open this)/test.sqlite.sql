-- TABLE
CREATE TABLE Categories (
    CategoryID INT PRIMARY KEY,
    CategoryName VARCHAR(255) NOT NULL,
    Description TEXT,
    Picture BLOB
);
CREATE TABLE Customers (
    CustomerID INT PRIMARY KEY,
    CompanyName VARCHAR(255) NOT NULL,
    ContactName VARCHAR(255),
    ContactTitle VARCHAR(255),
    Address VARCHAR(255),
    City VARCHAR(255),
    Region VARCHAR(255),
    PostalCode VARCHAR(255),
    Country VARCHAR(255),
    Phone VARCHAR(255),
    Fax VARCHAR(255)
);
CREATE TABLE demo (ID integer primary key, Name varchar(20), Hint text );
CREATE TABLE OrderDetails (
    OrderID INT,
    ProductID INT,
    UnitPrice DECIMAL(10, 2),
    Quantity INT,
    Discount DECIMAL(3, 2),
    PRIMARY KEY (OrderID, ProductID)
);
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    CustomerID INT,
    EmployeeID INT,
    OrderDate DATE,
    RequiredDate DATE,
    ShippedDate DATE,
    ShipVia INT,
    Freight DECIMAL(10, 2),
    ShipName VARCHAR(255),
    ShipAddress VARCHAR(255),
    ShipCity VARCHAR(255),
    ShipRegion VARCHAR(255),
    ShipPostalCode VARCHAR(255),
    ShipCountry VARCHAR(255)
);
CREATE TABLE Products (
    ProductID INT PRIMARY KEY,
    ProductName VARCHAR(255) NOT NULL,
    SupplierID INT,
    CategoryID INT,
    QuantityPerUnit VARCHAR(255),
    UnitPrice DECIMAL(10, 2),
    UnitsInStock INT,
    UnitsOnOrder INT,
    ReorderLevel INT,
    Discontinued BOOLEAN
);
CREATE TABLE Suppliers (
    SupplierID INT PRIMARY KEY,
    CompanyName VARCHAR(255) NOT NULL,
    ContactName VARCHAR(255),
    ContactTitle VARCHAR(255),
    Address VARCHAR(255),
    City VARCHAR(255),
    Region VARCHAR(255),
    PostalCode VARCHAR(255),
    Country VARCHAR(255),
    Phone VARCHAR(255),
    Fax VARCHAR(255),
    Homepage VARCHAR(255)
);
 
-- INDEX
 
-- TRIGGER
 
-- VIEW
CREATE VIEW CustomerOrderSummary AS
SELECT 
    o.CustomerID, 
    c.CompanyName, 
    SUM(od.UnitPrice * od.Quantity * (1 - od.Discount)) AS TotalAmountOrdered, 
    COUNT(DISTINCT od.ProductID) AS UniqueProductsOrdered
FROM 
    Orders o
JOIN 
    OrderDetails od
ON 
    o.OrderID = od.OrderID
JOIN 
    Customers c
ON 
    o.CustomerID = c.CustomerID
GROUP BY 
    o.CustomerID, 
    c.CompanyName;
CREATE VIEW TotalAmountPerOrder AS
SELECT 
    OrderID, 
    SUM(UnitPrice * Quantity * (1 - Discount)) AS TotalAmount
FROM 
    OrderDetails
GROUP BY 
    OrderID;
 
