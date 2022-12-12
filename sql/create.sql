CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE
  user_accounts (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    email_address VARCHAR(256) NOT NULL,
    password VARCHAR(256) NOT NULL,
    date_created DATETIME NOT NULL
  );
