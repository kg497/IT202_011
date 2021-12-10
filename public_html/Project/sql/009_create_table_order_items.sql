CREATE TABLE IF NOT EXISTS OrderItems(
    id int AUTO_INCREMENT PRIMARY  KEY,
    order_id int,
    product_id int,
    quantity int DEFAULT 0,
    unit_price float,
    FOREIGN KEY (order_id) REFERENCES Orders(id),
    FOREIGN KEY (product_id) REFERENCES Products(id),
    UNIQUE KEY (product_id, order_id),
    check (quantity >= 0)
)