INSERT INTO orders(orderID, orderNumber, personID)
VALUES (4, 24562, 1);

# Foreign key prevents the entry of data into a table when there is
# no matching value in the parent table's primary key.
INSERT INTO orders(orderID, orderNumber, personID)
VALUES (5, 67890, 8);
