INSERT INTO persons(personID, lastName, firstName, age)
VALUES (1, "Hansen", "Ola", 30);

INSERT INTO persons(personID, lastName, firstName, age)
VALUES (2, "Svendson", "Tove", 23);

INSERT INTO persons(lastName, firstName, age)
VALUES ("Pettersen", "Kari", 20);

INSERT INTO orders(orderID, orderNumber, personID)
VALUES (1, 77895, 3);

INSERT INTO orders(orderNumber, personID) VALUES (44678, 3);

INSERT INTO orders(orderNumber) VALUES (22456);
