SELECT orders.orderID, customers.customerName, orders.orderDate
FROM orders
INNER JOIN customers on orders.customerID = customers.customerID;


SELECT orders.orderID, orders.orderDate FROM orders;

SELECT * FROM orders;

SELECT orders.orderID, orders.orderDate,