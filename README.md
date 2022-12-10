# Registration Form using PHP

This project uses PHP and [Tailwind CSS](https://tailwindcss.com) with the use of [XAMPP](https://www.apachefriends.org). To run this repository locally, follow the instructions below.

## Prerequisite

- Node.js
- npm (Node Package Manager)

### Installation

1. Download and install Node.js [here](https://nodejs.org/en/).
2. Check if the installation was successfull by running the command in a terminal below:

   ```shell
   node --version
   ```

**Note:** npm is built-in in Node.js, so after the installation, you're good to go.

## Creating Database

1. Create two databases

   ```sql
   CREATE DATABASE RegistrationForm;
   CREATE DATABASE login;
   ```

2. Create tables inside these databases

   - StudentRecord table

     ```sql
     USE RegistrationForm;

     CREATE TABLE
       StudentRecord (
         id INT (6) PRIMARY KEY NOT NULL,
         first_name VARCHAR(256),
         last_name VARCHAR(256),
         age INT
       );
     ```

   - login table

     ```sql
     USE login;

     CREATE TABLE
       user_table (username VARCHAR(256), password VARCHAR(256));
     ```

## Local Setup

1. Download or clone this repository to the htdocs folder

   ```shell
   git clone https://github.com/joaquinvaldezzz/registration-form.git
   ```

2. Navigate to the folder

   ```shell
   cd registration-form
   ```

3. Install dependencies

   ```shell
   npm install
   ```

4. Start the XAMPP localhost
5. Navigate to http://localhost/registration-form
6. Run the "watch" script in a terminal to update stylesheets when files change

   ```shell
   npm run watch
   ```
