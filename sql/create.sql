CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE
  user_accounts (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    email_address VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    date_created DATETIME NOT NULL
  );

ALTER TABLE
  user_accounts
ADD COLUMN
  first_name VARCHAR(256) NOT NULL AFTER id;

ALTER TABLE
  user_accounts
ADD COLUMN
  last_name VARCHAR(256) NOT NULL after first_name;

ALTER TABLE
  user_accounts MODIFY COLUMN last_name VARCHAR(256);

CREATE TABLE
  shopping_cart (
    item_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    item_name VARCHAR(256) NOT NULL,
    item_color VARCHAR(256) NOT NULL,
    item_price DECIMAL(10, 2) NOT NULL,
    item_size VARCHAR(256) NOT NULL,
    item_quantity INT NOT NULL,
    item_account_id INT NOT NULL,
    FOREIGN KEY (item_account_id) REFERENCES user_accounts (id)
  );

ALTER TABLE
  user_accounts auto_increment = 1;
