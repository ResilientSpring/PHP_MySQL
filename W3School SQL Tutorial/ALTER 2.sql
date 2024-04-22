ALTER TABLE orders RENAME COLUMN OrderDate TO orderDate;

ALTER TABLE orders CHANGE COLUMN `OrderDate` `orderDate` DATE;

# Reference:
# 1. https://stackoverflow.com/questions/53735305/how-to-rename-a-column-name-in-maria-db