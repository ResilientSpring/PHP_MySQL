SELECT probationer.customerID,
       probationer.country,
       probationer.city
FROM probationer.customers
ORDER BY probationer.customers.city desc ;