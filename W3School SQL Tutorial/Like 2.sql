SELECT * FROM customers WHERE customers.customers.customerName LIKE "A%";

-- Wild cards operators % and _ can only be used in conjunction with
-- LIKE . [1]
--
-- Reference: https://www.w3schools.com/sql/sql_like.asp