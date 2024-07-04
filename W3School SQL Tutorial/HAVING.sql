SELECT COUNT(customers.customerID), customers.country FROM customers
GROUP BY customers.country HAVING COUNT(customerID) > 5;