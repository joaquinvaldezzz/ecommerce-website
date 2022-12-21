CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE
  user_accounts (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(256),
    last_name VARCHAR(256),
    email_address VARCHAR(256),
    password VARCHAR(256),
    date_created DATETIME
  );

CREATE TABLE
  shopping_cart (
    item_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    item_image VARCHAR(256),
    item_name VARCHAR(256),
    item_color VARCHAR(256),
    item_price DECIMAL(10, 2),
    item_quantity INT,
    item_account_id INT,
    FOREIGN KEY (item_account_id) REFERENCES user_accounts (id)
  );

CREATE TABLE
  products_table (
    product_id INT PRIMARY KEY NOT NULL,
    product_image VARCHAR(256),
    product_name VARCHAR(256),
    product_color VARCHAR(256),
    product_price DECIMAL(10, 2)
  );

CREATE TABLE
  contact_us (
    contact_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    contact_first_name VARCHAR(256),
    contact_last_name VARCHAR(256),
    contact_email VARCHAR(256),
    contact_message VARCHAR(256),
    date_sent DATETIME
  );

-- Reset `AUTO_INCREMENT` of `id` in `user_accounts`
ALTER TABLE
  user_accounts AUTO_INCREMENT = 1;
