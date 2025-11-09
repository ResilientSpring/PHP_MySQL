SELECT COUNT(customers.customerID), customers.country FROM customers
GROUP BY customers.country HAVING COUNT(customerID) > 5;

SELECT COUNT(customers.customerID), customers.country FROM customers
GROUP BY customers.country WHERE COUNT(customerID) > 5;