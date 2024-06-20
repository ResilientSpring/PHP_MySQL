CREATE TABLE suppliers3(
                           supplierID INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
                           supplierName VARCHAR(255) NOT NULL UNIQUE ,
                           contactName VARCHAR(255) ,
                           address VARCHAR(255),
                           city VARCHAR(255),
                           postCode VARCHAR(255),
                           country VARCHAR(255)

);

INSERT INTO suppliers3(supplierID, supplierName, contactName, address,
                       city, postCode, country)
VALUES (1, "Exotic Liquid", "Charlotte Copper", "49 Gilbert St.",
        "Londona", "EC1 4SD", "UK");

INSERT INTO suppliers3(supplierName) VALUES ("Grandma Kelly''s Homestead ");
