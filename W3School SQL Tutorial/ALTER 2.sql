ALTER TABLE orders RENAME COLUMN OrderDate TO orderDate; #[1]

ALTER TABLE orders CHANGE COLUMN `OrderDate` `orderDate` DATE; #[2]

# Reference:
# 1. https://www.w3schools.com/sql/sql_alter.asp
# 2. https://stackoverflow.com/questions/53735305/how-to-rename-a-column-name-in-maria-db