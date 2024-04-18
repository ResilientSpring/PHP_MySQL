-- If you want to return all columns, use SELECT *  .[1]
SELECT * FROM customers
         WHERE customers.customers.contactName LIKE "A%" OR "B___%";


-- Reference: https://www.w3schools.com/sql/sql_select.asp