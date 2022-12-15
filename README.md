# eCommerce Website using PHP

This project uses PHP and [Tailwind CSS](https://tailwindcss.com). To run this repository locally, follow the instructions below.

## Prerequisite

- Node.js
- npm (Node Package Manager)

### Installation

1. Download and install Node.js [here](https://nodejs.org/en/).
2. Check if the installation was successfull by running this command in a terminal.

   ```shell
   node --version
   ```

**Note:** npm is built-in in Node.js, so after the installation, you're good to go.

## Local Setup

1. Download or clone this repository to the htdocs folder

   ```shell
   git clone https://github.com/joaquinvaldezzz/ecommerce-website.git
   ```

2. Navigate to the folder

   ```shell
   cd ecommerce-website
   ```

3. Install dependencies

   ```shell
   npm install
   ```

4. Start the XAMPP localhost
5. Navigate to http://localhost/ecommerce-website
6. Run the "build" script to compile CSS and JavaScript

   ```shell
   npm run build
   ```

## Creating Database

1. Create a database

   ```sql
   CREATE DATABASE ecommerce;
   ```

2. Create a table for user accounts

   ```sql
   CREATE TABLE
     user_accounts (
       id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
       email_address VARCHAR(256) NOT NULL,
       password VARCHAR(256) NOT NULL,
       date_created DATETIME NOT NULL
     );
   ```

3. Create a table for shopping cart

   ```sql
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
   ```
