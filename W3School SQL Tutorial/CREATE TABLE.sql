CREATE TABLE persons(

    personID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    lastName VARCHAR(255) NOT NULL ,
    firstName VARCHAR(255) NOT NULL ,
    age INT NOT NULL

);

CREATE TABLE orders (

    orderID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    orderNumber INT UNSIGNED,
    personID INT ,
    FOREIGN KEY (personID) REFERENCES persons(personID)

);
