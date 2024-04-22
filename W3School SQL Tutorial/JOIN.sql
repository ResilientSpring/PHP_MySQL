SELECT orders.orderID, customers.customerName, orders.orderDate
FROM orders
INNER JOIN customers on orders.customerID = customers.customerID;