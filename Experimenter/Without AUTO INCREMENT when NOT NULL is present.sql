CREATE TABLE suppliers(
    supplierID INT NOT NULL PRIMARY KEY ,
    supplierName VARCHAR(255) NOT NULL UNIQUE ,
    contactName VARCHAR(255) ,
    address VARCHAR(255),
    city VARCHAR(255),
    postCode INT,
    country VARCHAR(255)

);


