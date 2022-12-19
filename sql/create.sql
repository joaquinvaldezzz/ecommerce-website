CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE
  user_accounts (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(256) NOT NULL,
    last_name VARCHAR(256),
    email_address VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    date_created DATETIME NOT NULL
  );

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

CREATE TABLE
  products_table (
    product_id INT PRIMARY KEY NOT NULL,
    product_image VARCHAR(256) NOT NULL,
    product_name VARCHAR(256) NOT NULL,
    product_color VARCHAR(256) NOT NULL,
    product_price DECIMAL(10, 2) NOT NULL
  );

CREATE TABLE
  contact_us (
    contact_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    contact_first_name VARCHAR(256) NOT NULL,
    contact_last_name VARCHAR(256),
    contact_email VARCHAR(256) NOT NULL,
    contact_message VARCHAR(256) NOT NULL,
    date_sent DATETIME NOT NULL
  );

-- Reset `AUTO_INCREMENT` of `id` in `user_accounts`
ALTER TABLE
  user_accounts auto_increment = 1;
