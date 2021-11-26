
CREATE TABLE IF NOT EXISTS Products(
    id int AUTO_INCREMENT PRIMARY  KEY,
    name varchar(30) UNIQUE, -- alternatively you'd have a SKU that's unique
    description text,
    category varchar(30) default 'uncategorized',
    stock int DEFAULT  0,
    unit_price float DEFAULT  9999.99,
    /*image text, -- this col type can't have a default value*/
    visibility tinyint(1) default false,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
)