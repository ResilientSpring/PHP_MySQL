ALTER TABLE orders RENAME COLUMN OrderDate TO orderDate;

ALTER TABLE orders CHANGE COLUMN `OrderDate` `orderDate` DATE;