ALTER TABLE orders ADD OrderDate DATE;
ALTER TABLE orders ADD customerID INT;

ALTER TABLE orders ALTER COLUMN customerID INT UNSIGNED;

ALTER TABLE orders ADD FOREIGN KEY (customerID) REFERENCES customers(customerID);