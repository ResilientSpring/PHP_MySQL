CREATE TABLE orders (

    orderID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    orderNumber INT UNSIGNED,
    personID INT UNSIGNED,
    FOREIGN KEY (personID) REFERENCES persons(personID)

);