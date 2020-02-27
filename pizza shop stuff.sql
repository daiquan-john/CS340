CREATE TABLE ORDERS
(ORDER_NUM int NOT NULL AUTO_INCREMENT,
ORDER_COST DECIMAL(4,2),
PAY_METHOD Char(10),
ORDER_CONTENT CHAR(50),
ORDER_DATE DATE,
ORDER_DELIVERY Char(10),
PRIMARY KEY (ORDER_NUM) );


INSERT INTO ORDERS
VALUES	
(null, 25.50, 'Credit', 'test pepperoni pizza', '2018-10-20', 'carry-out');
INSERT INTO ORDERS
VALUES	
(null, 29.50, 'Credit', 'test vegan pizza', '2018-10-22', 'dine-in');
INSERT INTO ORDERS
VALUES	
(null, 21.50, 'Cash', 'test Cheese pizza', '2018-10-25', 'dine-in');
INSERT INTO ORDERS
VALUES	
(null, 36.50, 'Credit', 'test pineapple pizza', '2018-10-23', 'delivery');
INSERT INTO ORDERS
VALUES
(null, 27.50, 'Cash', 'test meatlovers pizza', '2018-10-23', 'carry-out');