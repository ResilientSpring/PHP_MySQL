INSERT INTO orders(orderNumber, personID) VALUES (0809449, 23);

# FOREIGN KEY prevents invalid data from being inserted into
# the foreign key column, because it has to be one of the values
# contained in the parent table's primary key.[1]

# Reference: https://www.w3schools.com/sql/sql_foreignkey.asp

INSERT INTO orders(orderNumber, personID) VALUES (20806449, 4);
# In this case, 23 does not exist in the primary key of the table it references.

INSERT INTO orders(orderNumber, personID) VALUES (50806449, 3);
