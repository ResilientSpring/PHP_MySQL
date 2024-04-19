CREATE TABLE orders (

    orderID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    orderNumber INT UNSIGNED,
    personID INT ,
    FOREIGN KEY (personID) REFERENCES persons(personID)

);